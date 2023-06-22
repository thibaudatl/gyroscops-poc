<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/** @template Type */
interface ExtractorInterface
{
    /**
     * Extract data from the given source.
     *
     * @return iterable<ResultBucketInterface<Type|null>>
     */
    public function extract(): iterable;
}
