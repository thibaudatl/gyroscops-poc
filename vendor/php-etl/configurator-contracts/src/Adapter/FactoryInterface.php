<?php

declare(strict_types=1);

namespace Kiboko\Contract\Configurator\Adapter;

use Kiboko\Contract\Configurator\AdapterConfigurationInterface;
use Kiboko\Contract\Configurator\SatelliteBuilderInterface;

interface FactoryInterface
{
    public function configuration(): AdapterConfigurationInterface;

    public function __invoke(array $configuration): SatelliteBuilderInterface;
}
