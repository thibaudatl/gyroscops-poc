<?php

declare(strict_types=1);

namespace Kiboko\Component\Satellite\Runtime\Api;

use Kiboko\Component\Satellite;
use Kiboko\Contract\Configurator;

#[Configurator\Runtime(name: 'api')]
final readonly class Factory implements Satellite\Runtime\FactoryInterface
{
    private Configuration $configuration;

    public function __construct()
    {
        $this->configuration = new Configuration();
    }

    public function addFeature(string $name, Configurator\FactoryInterface $feature): self
    {
        $this->configuration->addFeature($name, $feature->configuration());

        return $this;
    }

    public function addPlugin(string $name, Configurator\FactoryInterface $plugin): self
    {
        $this->configuration->addPlugin($name, $plugin->configuration());

        return $this;
    }

    public function configuration(): Configurator\RuntimeConfigurationInterface
    {
        return $this->configuration;
    }

    public function __invoke(array $configuration): Satellite\Runtime\RuntimeInterface
    {
        return new Runtime($configuration);
    }
}
