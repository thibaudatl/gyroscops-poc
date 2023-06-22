<?php

declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

use PhpParser\Builder;
use PhpParser\Node;

interface StepBuilderInterface extends Builder
{
    public function withLogger(Node\Expr $logger): self;

    public function withRejection(Node\Expr $rejection): self;

    public function withState(Node\Expr $state): self;
}
