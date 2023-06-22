<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata\TypeGuesser;

use Kiboko\Contract\Metadata\TypeMetadataInterface;

interface TypeGuesserInterface
{
    /**
     * @template Subject of object
     *
     * @param \ReflectionClass<Subject> $class
     */
    public function __invoke(\ReflectionClass $class, \Reflector $reflector): TypeMetadataInterface;
}
