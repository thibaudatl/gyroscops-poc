<?php

declare(strict_types=1);

namespace Kiboko\Contract\Packaging;

interface AssetInterface
{
    /** @return resource */
    public function asResource();
}
