<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface ListTypeMetadataInterface extends IterableTypeMetadataInterface
{
    public function getInner(): TypeMetadataInterface;
}
