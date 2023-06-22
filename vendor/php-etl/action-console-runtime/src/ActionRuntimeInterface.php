<?php

declare(strict_types=1);

namespace Kiboko\Component\Runtime\Action;

use Kiboko\Contract\Action\ActionInterface;
use Kiboko\Contract\Action\StateInterface;
use Kiboko\Contract\Satellite\RunnableInterface;

interface ActionRuntimeInterface extends RunnableInterface
{
    public function execute(
        ActionInterface $action,
        StateInterface $state,
    ): self;
}
