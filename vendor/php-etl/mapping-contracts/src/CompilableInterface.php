<?php

declare(strict_types=1);

namespace Kiboko\Contract\Mapping;

use PhpParser\Node;

interface CompilableInterface
{
    /**
     * @return array<Node>
     */
    public function compile(Node\Expr $outputNode): array;
}
