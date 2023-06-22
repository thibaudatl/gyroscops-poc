<?php

declare(strict_types=1);

namespace Kiboko\Component\Satellite\Runtime;

use Kiboko\Contract\Configurator;

interface FactoryInterface
{
    public function configuration(): Configurator\RuntimeConfigurationInterface;

    public function addFeature(string $name, Configurator\FactoryInterface $feature): self;

    public function addPlugin(string $name, Configurator\FactoryInterface $plugin): self;

    public function __invoke(array $configuration): RuntimeInterface;
}
