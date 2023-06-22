<?php

declare(strict_types=1);

namespace Kiboko\Contract\Configurator\Pipeline;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
final class StepLoader
{
    public function __construct(
        public ?string $name = 'loader',
    ) {
    }
}
