<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/** @template Type */
interface TransformerInterface
{
    /**
     * Transforms the data from one format to another.
     *
     * @return \Generator<mixed, ResultBucketInterface<Type>|ResultBucketInterface<void>, Type|null, void>
     */
    public function transform(): \Generator;
}
