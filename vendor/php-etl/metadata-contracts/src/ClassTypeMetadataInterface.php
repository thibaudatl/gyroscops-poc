<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template Subject of object
 *
 * @extends ClassMetadataInterface<Subject>
 */
interface ClassTypeMetadataInterface extends ClassMetadataInterface
{
    /**
     * @return iterable<PropertyMetadataInterface<Subject>>
     */
    public function getProperties(): iterable;

    /**
     * @return PropertyMetadataInterface<Subject>
     */
    public function getProperty(string $name): PropertyMetadataInterface;

    /**
     * @param PropertyMetadataInterface<Subject> ...$properties
     *
     * @return ClassTypeMetadataInterface<Subject>
     */
    public function addProperties(PropertyMetadataInterface ...$properties): self;

    /**
     * @return iterable<MethodMetadataInterface<Subject>>
     */
    public function getMethods(): iterable;

    /**
     * @return MethodMetadataInterface<Subject>
     */
    public function getMethod(string $name): MethodMetadataInterface;

    /**
     * @param MethodMetadataInterface<Subject> ...$methods
     *
     * @return ClassTypeMetadataInterface<Subject>
     */
    public function addMethods(MethodMetadataInterface ...$methods): self;

    /**
     * @return iterable<FieldMetadataInterface<Subject>>
     */
    public function getFields(): iterable;

    /**
     * @return FieldMetadataInterface<Subject>
     */
    public function getField(string $name): FieldMetadataInterface;

    /**
     * @param FieldMetadataInterface<Subject> ...$fields
     *
     * @return ClassTypeMetadataInterface<Subject>
     */
    public function addFields(FieldMetadataInterface ...$fields): self;

    /**
     * @return iterable<RelationMetadataInterface<Subject>>
     */
    public function getRelations(): iterable;

    /**
     * @return RelationMetadataInterface<Subject>
     */
    public function getRelation(string $name): RelationMetadataInterface;

    /**
     * @param RelationMetadataInterface<Subject> ...$relations
     *
     * @return ClassTypeMetadataInterface<Subject>
     */
    public function addRelations(RelationMetadataInterface ...$relations): self;
}
