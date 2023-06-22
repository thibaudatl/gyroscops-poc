<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata\TypeGuesser\Native;

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
    public function __invoke(\ReflectionClass $class, \ReflectionType $reflector): iterable;
}
