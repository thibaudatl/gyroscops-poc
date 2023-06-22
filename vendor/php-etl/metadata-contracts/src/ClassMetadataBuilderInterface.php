<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface ClassMetadataBuilderInterface
{
    /**
     * @template Subject of object
     *
     * @param ClassReferenceMetadataInterface<Subject> $class
     *
     * @return ClassTypeMetadataInterface<Subject>
     */
    public function buildFromReference(ClassReferenceMetadataInterface $class): ClassTypeMetadataInterface;

    /**
     * @template Subject of object
     *
     * @param class-string<Subject> $className
     *
     * @return ClassTypeMetadataInterface<Subject>
     */
    public function buildFromFQCN(string $className): ClassTypeMetadataInterface;

    /**
     * @template Subject of object
     *
     * @param Subject $object
     *
     * @return ClassTypeMetadataInterface<Subject>
     */
    public function buildFromObject(object $object): ClassTypeMetadataInterface;

    /**
     * @template Subject of object
     *
     * @param \ReflectionClass<Subject> $classOrObject
     *
     * @return ClassTypeMetadataInterface<Subject>
     */
    public function build(\ReflectionClass $classOrObject): ClassTypeMetadataInterface;
}
