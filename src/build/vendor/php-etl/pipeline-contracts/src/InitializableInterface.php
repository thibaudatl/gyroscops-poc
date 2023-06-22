<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface InitializableInterface
{
    public function initialize(): void;
}
