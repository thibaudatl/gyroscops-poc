<?php

declare(strict_types=1);

namespace Kiboko\Contract\Mapping;

/**
 * @template InputType
 * @template OutputType
 * @template ReturnType
 *
 * @extends ObjectInitializerInterface<InputType, OutputType, ReturnType>
 */
interface CompilableObjectInitializerInterface extends ObjectInitializerInterface, CompilableInterface
{
}
