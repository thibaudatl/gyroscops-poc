<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/** @template Type */
interface LoaderInterface
{
    /**
     * Loads data in the given sink.
     *
     * @return \Generator<mixed, ResultBucketInterface<Type>|ResultBucketInterface<void>, Type|null, void>
     */
    public function load(): \Generator;
}
