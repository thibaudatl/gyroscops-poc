<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface LoadingInterface
{
    /**
     * @template Type
     *
     * @param LoaderInterface<Type> $loader
     */
    public function load(
        LoaderInterface $loader,
        RejectionInterface $rejection,
        StateInterface $state,
    ): self;
}
