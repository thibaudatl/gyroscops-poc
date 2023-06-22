<?php

declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

use Symfony\Component\Config\Definition\ConfigurationInterface;

interface FactoryInterface
{
    public function configuration(): ConfigurationInterface;

    /**
     * @param array<string,string> $config
     *
     * @return array<string,mixed>
     *
     * @throws ConfigurationExceptionInterface
     */
    public function normalize(array $config): array;

    /**
     * @param array<string,mixed> $config
     */
    public function validate(array $config): bool;

    /**
     * @param array<string,mixed> $config
     */
    public function compile(array $config): RepositoryInterface;
}
