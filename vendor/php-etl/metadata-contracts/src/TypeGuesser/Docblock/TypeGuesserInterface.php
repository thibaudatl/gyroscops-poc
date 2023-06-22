<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata\TypeGuesser\Docblock;

use Kiboko\Contract\Metadata\TypeMetadataInterface;

interface TypeGuesserInterface
{
    /**
     * @template Subject of object
     *
     * @param \ReflectionClass<Subject> $class
     *
     * @return iterable<TypeMetadataInterface>
     */
    public function __invoke(string $tagName, \ReflectionClass $class, \Reflector $reflector): iterable;
}
