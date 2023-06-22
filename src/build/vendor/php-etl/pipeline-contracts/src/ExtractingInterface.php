<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface ExtractingInterface
{
    /**
     * @template Type
     *
     * @param ExtractorInterface<Type> $extractor
     */
    public function extract(
        ExtractorInterface $extractor,
        RejectionInterface $rejection,
        StateInterface $state,
    ): self;
}
