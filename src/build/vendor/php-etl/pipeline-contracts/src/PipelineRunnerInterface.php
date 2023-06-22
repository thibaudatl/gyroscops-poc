<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/**
 * @template Type
 */
interface PipelineRunnerInterface
{
    /**
     * @param \Iterator<array|object>                                    $source
     * @param \Generator<mixed, Type, ResultBucketInterface<Type>, void> $async
     *
     * @return \Iterator<array|object>
     */
    public function run(
        \Iterator $source,
        \Generator $async,
        RejectionInterface $rejection,
        StateInterface $state,
    ): \Iterator;
}
