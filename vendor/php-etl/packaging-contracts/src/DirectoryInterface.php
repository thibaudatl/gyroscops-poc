<?php

declare(strict_types=1);

namespace Kiboko\Contract\Packaging;

/**
 * @extends \RecursiveIterator<string, FileInterface|DirectoryInterface>
 */
interface DirectoryInterface extends \RecursiveIterator
{
    public function getPath(): string;
}
