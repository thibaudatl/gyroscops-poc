<?php

declare(strict_types=1);

namespace Kiboko\Contract\Action;

final class ActionState implements StateInterface
{
    /** @var array<string, int> */
    private array $metrics = [];

    public function __construct(
        private readonly StateInterface $decorated,
    ) {
    }

    public function initialize(): void
    {
        $this->metrics = [
            'success' => 0,
            'failure' => 0,
        ];

        $this->decorated->initialize();
    }

    public function success(int $step = 1): void
    {
        $this->metrics['success'] += $step;
        $this->decorated->success($step);
    }

    public function failure(int $step = 1): void
    {
        $this->metrics['failure'] += $step;
        $this->decorated->failure($step);
    }

    public function observeAccept(): callable
    {
        return fn () => $this->metrics['success'];
    }

    public function observeReject(): callable
    {
        return fn () => $this->metrics['failure'];
    }

    public function teardown(): void
    {
        $this->decorated->teardown();
    }
}
