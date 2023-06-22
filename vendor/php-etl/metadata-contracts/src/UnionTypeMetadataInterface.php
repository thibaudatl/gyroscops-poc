<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @extends \Traversable<TypeMetadataInterface>
 */
interface UnionTypeMetadataInterface extends TypeMetadataInterface, \Countable, \Traversable
{
}
