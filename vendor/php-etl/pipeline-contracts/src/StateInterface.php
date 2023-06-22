<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface StateInterface
{
    public function initialize(int $start = 0): void;

    public function accept(int $step = 1): void;

    public function reject(int $step = 1): void;

    public function error(int $step = 1): void;

    public function teardown(): void;
}
