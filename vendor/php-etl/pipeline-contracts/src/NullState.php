<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

final class NullState implements StateInterface
{
    public function initialize(int $start = 0): void
    {
        // NOOP
    }

    public function accept(int $step = 1): void
    {
        // NOOP
    }

    public function reject(int $step = 1): void
    {
        // NOOP
    }

    public function error(int $step = 1): void
    {
        // NOOP
    }

    public function teardown(): void
    {
        // NOOP
    }
}
