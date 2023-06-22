<?php

declare(strict_types=1);

namespace Kiboko\Component\Satellite\Cloud\Console\Command\Organization;

use Gyroscops\Api;
use Kiboko\Component\Satellite;
use Kiboko\Component\Satellite\Cloud\AccessDeniedException;
use Symfony\Component\Console;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Psr18Client;

final class ChangeCommand extends Console\Command\Command
{
    protected static $defaultName = 'organization:change';
    protected static $defaultDescription = 'Sends configuration to the Gyroscops API.';

    protected function configure(): void
    {
        $this->addOption('url', 'u', mode: Console\Input\InputArgument::OPTIONAL, description: 'Base URL of the cloud instance', default: 'https://app.gyroscops.com');
        $this->addOption('beta', mode: Console\Input\InputOption::VALUE_NONE, description: 'Shortcut to set the cloud instance to https://beta.gyroscops.com');
        $this->addOption('ssl', mode: Console\Input\InputOption::VALUE_NEGATABLE, description: 'Enable or disable SSL');

        $this->addArgument('organization-id', mode: Console\Input\InputArgument::OPTIONAL, description: 'Organization identifier');
    }

    protected function execute(Console\Input\InputInterface $input, Console\Output\OutputInterface $output): int
    {
        $style = new Console\Style\SymfonyStyle(
            $input,
            $output,
        );

        if ($input->getOption('beta')) {
            $url = 'https://beta.gyroscops.com';
            $ssl = $input->getOption('ssl') ?? true;
        } elseif ($input->getOption('url')) {
            $url = $input->getOption('url');
            $ssl = $input->getOption('ssl') ?? true;
        } else {
            $url = 'https://gyroscops.com';
            $ssl = $input->getOption('ssl') ?? true;
        }

        $auth = new Satellite\Cloud\Auth();
        try {
            $token = $auth->token($url);
        } catch (AccessDeniedException) {
            $style->error('Your credentials were not found, please run <info>cloud login</>.');

            return self::FAILURE;
        }

        $httpClient = HttpClient::createForBaseUri(
            $url,
            [
                'verify_peer' => $ssl,
                'auth_bearer' => $token,
            ]
        );

        $psr18Client = new Psr18Client($httpClient);
        $client = Api\Client::create($psr18Client);
        $context = new Satellite\Cloud\Context($client, $auth, $url);

        if ($input->getArgument('organization-id')) {
            try {
                $organization = $client->getOrganizationItem($input->getArgument('organization-id'));
            } catch (Api\Exception\GetOrganizationItemNotFoundException) {
                $style->error(['The provided organization identifier was not found.']);
                $style->writeln(['Please double check your input or run <fg=yellow>cloud organization:list</> command.']);

                return self::FAILURE;
            }

            $organization = new Satellite\Cloud\DTO\OrganizationId($organization->getId());
            $context->changeOrganization($organization);

            $style->success('The organization has been successfully changed.');

            return self::SUCCESS;
        }

        $organizations = $client->getOrganizationCollection();

        $choices = [];
        foreach ($organizations as $organization) {
            $choices[$organization->getId()] = $organization->getName();
        }

        $currentOrganization = $context->organization();

        $choice = $style->choice('Choose your organization:', $choices, $currentOrganization->asString());

        $organization = new Satellite\Cloud\DTO\OrganizationId($choice);
        $context->changeOrganization($organization);

        $style->success('The organization has been successfully changed.');

        return self::SUCCESS;
    }
}
