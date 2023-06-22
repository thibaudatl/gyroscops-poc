<?php

declare(strict_types=1);

namespace Kiboko\Contract\Mapping;

use Symfony\Component\PropertyAccess\PropertyPathInterface;

/**
 * @template InputType
 * @template OutputType
 * @template ReturnType
 */
interface MapperInterface
{
    /**
     * @param InputType                     $input
     * @param OutputType|null               $output
     * @param PropertyPathInterface<string> $outputPath
     *
     * @return ReturnType
     */
    public function __invoke($input, $output, PropertyPathInterface $outputPath);
}
