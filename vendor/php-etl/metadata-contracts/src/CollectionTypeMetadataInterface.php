<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template Subject of object
 *
 * @extends ClassTypeMetadataInterface<Subject>
 */
interface CollectionTypeMetadataInterface extends IterableTypeMetadataInterface, ClassTypeMetadataInterface, TypedInterface
{
    /**
     * @return ClassMetadataInterface<Subject>
     */
    public function getType(): ClassMetadataInterface;

    public function getInner(): TypeMetadataInterface;
}
