<?php

declare(strict_types=1);

namespace Kiboko\Component\Pipeline;

final class UnexpectedYieldedValueType extends \UnexpectedValueException
{
    public function __construct(private readonly \Generator $coroutine, string $message = null, int $code = null, ?\Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public static function expectingTypes(\Generator $coroutine, array $expectedTypes, $actual, int $code = null, ?\Exception $previous = null): self
    {
        try {
            $re = new \ReflectionGenerator($coroutine);

            $function = $re->getFunction();
            $functionName = $function->getName();

            if ($function instanceof \ReflectionMethod) {
                $class = $function->getDeclaringClass();
                $functionName = $class->getName().'::'.$functionName;
            }
            $executionFile = $re->getExecutingFile();
            $executionLine = $re->getExecutingLine();

            return new self(
                $coroutine,
                strtr(
                    'Invalid yielded data, was expecting %expected%, got %actual%. Coroutine declared in %function%, running in %file%:%line%.',
                    [
                        '%expected%' => implode(' or ', $expectedTypes),
                        '%actual%' => get_debug_type($actual),
                        '%function%' => $functionName,
                        '%file%' => $executionFile,
                        '%line%' => $executionLine,
                    ]
                ),
                $code,
                $previous
            );
        } catch (\ReflectionException) {
            return new self(
                $coroutine,
                strtr(
                    'Invalid yielded data, was expecting %expected%, got %actual%. Coroutine was declared in a terminated generator, could not fetch the declaration metadata.',
                    [
                        '%expected%' => implode(' or ', $expectedTypes),
                        '%actual%' => get_debug_type($actual),
                    ]
                ),
                $code,
                $previous
            );
        }
    }
}
