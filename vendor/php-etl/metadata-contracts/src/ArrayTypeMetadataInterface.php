<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @extends \Traversable<ArrayEntryMetadataInterface>
 */
interface ArrayTypeMetadataInterface extends \Traversable, CompositeTypeMetadataInterface
{
}
