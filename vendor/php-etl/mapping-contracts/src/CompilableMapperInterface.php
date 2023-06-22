<?php

declare(strict_types=1);

namespace Kiboko\Contract\Mapping;

use PhpParser\Node;

/**
 * @template InputType
 * @template OutputType
 * @template ReturnType
 *
 * @extends MapperInterface<InputType, OutputType, ReturnType>
 */
interface CompilableMapperInterface extends MapperInterface, CompilableInterface
{
    public function addContextVariable(Node\Expr\Variable $variable): CompilableInterface;
}
