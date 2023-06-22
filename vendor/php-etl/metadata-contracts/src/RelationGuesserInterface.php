<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

use PhpSpec\Wrapper\Subject;

interface RelationGuesserInterface
{
    /**
     * @template Subject of object
     *
     * @param ClassTypeMetadataInterface<Subject> $class
     *
     * @return iterable<RelationMetadataInterface<Subject>>
     */
    public function __invoke(ClassTypeMetadataInterface $class): iterable;
}
