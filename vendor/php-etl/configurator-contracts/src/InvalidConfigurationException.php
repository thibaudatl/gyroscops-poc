<?php

declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

final class InvalidConfigurationException extends \InvalidArgumentException implements ConfigurationExceptionInterface
{
}
