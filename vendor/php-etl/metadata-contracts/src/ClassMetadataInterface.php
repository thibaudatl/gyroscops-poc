<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template Subject of object
 */
interface ClassMetadataInterface extends CompositeTypeMetadataInterface
{
    /**
     * @return class-string<Subject>|null
     */
    public function getNamespace(): ?string;

    /**
     * @return class-string<Subject>|null
     */
    public function getName(): ?string;
}
