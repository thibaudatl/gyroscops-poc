<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface MethodGuesserInterface
{
    /**
     * @template Subject of object
     *
     * @param \ReflectionClass<Subject>           $classOrObject
     * @param ClassTypeMetadataInterface<Subject> $class
     *
     * @return iterable<TypeMetadataInterface>
     */
    public function __invoke(\ReflectionClass $classOrObject, ClassTypeMetadataInterface $class): iterable;
}
