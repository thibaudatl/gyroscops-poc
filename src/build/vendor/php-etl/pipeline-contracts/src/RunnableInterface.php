<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Satellite\RunnableInterface as SatelliteRunableInterface;

/** @deprecated Use \Kiboko\Contract\Job\RunnableInterface instead */
interface RunnableInterface extends SatelliteRunableInterface
{
}
