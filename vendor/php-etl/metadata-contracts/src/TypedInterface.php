<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface TypedInterface
{
    public function getType(): TypeMetadataInterface;
}
