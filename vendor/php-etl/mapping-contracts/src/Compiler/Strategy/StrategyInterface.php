<?php

declare(strict_types=1);

namespace Kiboko\Contract\Mapping\Compiler\Strategy;

use Kiboko\Contract\Mapping\CompilableMapperInterface;
use Kiboko\Contract\Metadata\ClassMetadataInterface;
use PhpParser\Node;
use Symfony\Component\PropertyAccess\PropertyPathInterface;

interface StrategyInterface
{
    /**
     * @template InputType
     * @template OutputType
     * @template ReturnType
     *
     * @param PropertyPathInterface<string>                                $outputPath
     * @param CompilableMapperInterface<InputType, OutputType, ReturnType> ...$mappers
     *
     * @return array<Node>
     */
    public function buildTree(
        PropertyPathInterface $outputPath,
        ClassMetadataInterface $class,
        CompilableMapperInterface ...$mappers
    ): array;
}
