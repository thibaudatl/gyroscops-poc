<?php

declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

use Symfony\Component\Config\Definition\ConfigurationInterface;

interface RuntimeConfigurationInterface extends ConfigurationInterface
{
    public function addPlugin(string $name, PluginConfigurationInterface $plugin): self;

    public function addFeature(string $name, FeatureConfigurationInterface $feature): self;

    public function addAction(string $name, ActionConfigurationInterface $action): self;
}
