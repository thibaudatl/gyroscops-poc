<?php

declare(strict_types=1);

namespace Kiboko\Contract\Mapping;

/**
 * @template InputType
 * @template OutputType
 * @template ReturnType
 *
 * @extends MapperInterface<InputType, OutputType, ReturnType>
 */
interface ArrayMapperInterface extends MapperInterface
{
}
