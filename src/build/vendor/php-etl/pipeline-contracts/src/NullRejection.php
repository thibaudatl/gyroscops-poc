<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

final class NullRejection implements RejectionInterface
{
    public function initialize(): void
    {
        // NOOP
    }

    /** @param non-empty-array<mixed>|object $rejection */
    public function reject(object|array $rejection, null|\Throwable $exception = null): void
    {
        // NOOP
    }

    public function teardown(): void
    {
        // NOOP
    }
}
