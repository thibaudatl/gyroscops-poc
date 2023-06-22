<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface WalkableInterface
{
    /** @return \Iterator<array|object> */
    public function walk(): \Iterator;
}
