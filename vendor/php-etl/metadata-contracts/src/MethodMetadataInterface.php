<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template Subject of object
 */
interface MethodMetadataInterface extends NamedInterface
{
    public function getArguments(): ArgumentListMetadataInterface;

    public function getReturnType(): TypeMetadataInterface;
}
