<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface ForkingInterface
{
    public function fork(callable ...$builders): self;
}
