<?php

declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

#[\Attribute(\Attribute::TARGET_CLASS)]
final class Action
{
    public function __construct(
        public string $name,
        public array $dependencies = [],
    ) {
    }
}
