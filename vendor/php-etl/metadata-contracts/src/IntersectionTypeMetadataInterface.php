<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @extends \Traversable<TypeMetadataInterface>
 */
interface IntersectionTypeMetadataInterface extends TypeMetadataInterface, \Countable, \Traversable
{
}
