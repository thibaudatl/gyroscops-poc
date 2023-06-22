<?php

declare(strict_types=1);

namespace Kiboko\Contract\Action;

interface ExecutingActionInterface
{
    public function execute(
        ActionInterface $action,
        StateInterface $state,
    ): self;
}
