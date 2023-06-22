<?php

declare(strict_types=1);

namespace Kiboko\Component\Dockerfile\Dockerfile;

final class Entrypoint implements LayerInterface, \Stringable
{
    private readonly iterable $entrypoint;

    public function __construct(string ...$entrypoint)
    {
        $this->entrypoint = $entrypoint;
    }

    public function __toString(): string
    {
        return sprintf('ENTRYPOINT [%s]', implode(', ', $this->entrypoint));
    }
}
