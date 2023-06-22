<?php

declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
final class Pipeline
{
    /** @var list<Pipeline\StepExtractor|Pipeline\StepTransformer|Pipeline\StepLoader> */
    public array $steps = [];

    /**
     * @param list<string>                                                                                    $dependencies
     * @param array<string, string>|list<Pipeline\StepExtractor|Pipeline\StepTransformer|Pipeline\StepLoader> $steps
     */
    public function __construct(
        public string $name,
        public array $dependencies = [],
        array $steps = [],
    ) {
        foreach ($steps as $name => $type) {
            if (
                !\is_string($name)
                && (
                    $type instanceof Pipeline\StepExtractor
                    || $type instanceof Pipeline\StepTransformer
                    || $type instanceof Pipeline\StepLoader
                )
            ) {
                $this->steps[] = $type;
                continue;
            }

            if ('extractor' === $type) {
                $this->steps[] = new Pipeline\StepExtractor(name: \is_string($name) && \strlen($name) > 0 ? $name : null);
                continue;
            }

            if ('transformer' === $type) {
                $this->steps[] = new Pipeline\StepTransformer(name: \is_string($name) && \strlen($name) > 0 ? $name : null);
                continue;
            }

            if ('loader' === $type) {
                $this->steps[] = new Pipeline\StepLoader(name: \is_string($name) && \strlen($name) > 0 ? $name : null);
                continue;
            }
        }
    }
}
