<?php

declare(strict_types=1);

namespace Kiboko\Component\Satellite\Plugin\Stream;

use Kiboko\Contract\Configurator\PluginConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\ExpressionLanguage\Expression;

final class Configuration implements PluginConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $builder = new TreeBuilder('stream');

        /* @phpstan-ignore-next-line */
        $builder->getRootNode()
            ->children()
                ->arrayNode('loader')
                    ->children()
                        ->scalarNode('destination')
                            ->validate()
                                ->ifTrue(fn ($value) => \in_array($value, ['stderr', 'stdout']))
                                ->then(fn ($value) => sprintf('php://%s', $value))
                            ->end()
                            ->setDeprecated('php-etl/stream-plugin', '0.1')
                            ->cannotBeEmpty()
                            ->validate()
                                ->ifTrue(fn ($data) => \is_string($data) && '' !== $data && str_starts_with($data, '@='))
                                ->then(fn ($data) => new Expression(substr((string) $data, 2)))
                            ->end()
                        ->end()
                        ->enumNode('format')
                            ->values(['json', 'debug'])
                            ->cannotBeEmpty()
                            ->validate()
                                ->ifTrue(fn ($data) => \is_string($data) && '' !== $data && str_starts_with($data, '@='))
                                ->then(fn ($data) => new Expression(substr((string) $data, 2)))
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $builder;
    }
}
