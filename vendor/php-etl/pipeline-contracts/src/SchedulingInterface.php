<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface SchedulingInterface
{
    public function job(RunnableInterface $job): self;
}
