<?php

declare(strict_types=1);

namespace Kiboko\Contract\Mapping\Compiler;

use Kiboko\Contract\Metadata\ClassMetadataInterface;
use Symfony\Component\PropertyAccess\PropertyPathInterface;

interface CompilationContextInterface
{
    /** @return PropertyPathInterface<string> */
    public function getPropertyPath(): PropertyPathInterface;

    public function getFilePath(): ?string;

    public function getClass(): ?ClassMetadataInterface;

    public function getNamespace(): ?string;

    public function getClassName(): ?string;
}
