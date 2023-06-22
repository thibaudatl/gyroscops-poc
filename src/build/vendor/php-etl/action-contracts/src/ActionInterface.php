<?php

declare(strict_types=1);

namespace Kiboko\Contract\Action;

interface ActionInterface
{
    public function execute(): void;
}
