<?php

declare(strict_types=1);

namespace Kiboko\Contract\Action;

interface StateInterface
{
    public function initialize(): void;

    public function success(int $step = 1): void;

    public function failure(int $step = 1): void;

    public function teardown(): void;
}
