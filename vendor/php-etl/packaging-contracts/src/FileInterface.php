<?php

declare(strict_types=1);

namespace Kiboko\Contract\Packaging;

interface FileInterface extends AssetInterface
{
    public function getPath(): string;
}
