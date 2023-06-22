<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface FieldGuesserInterface
{
    /**
     * @template Subject of object
     *
     * @param ClassTypeMetadataInterface<Subject> $class
     *
     * @return list<FieldMetadataInterface<Subject>>
     */
    public function __invoke(ClassTypeMetadataInterface $class): iterable;
}
