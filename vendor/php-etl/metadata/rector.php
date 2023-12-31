<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\PHPUnit\Set\PHPUnitLevelSetList;
use Rector\Symfony\Set\SymfonyLevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
    ]);

    // We are skipping this file because there is a conflict between rector refacto and phpstan
    $rectorConfig->skip([
        __DIR__ . '/src/TypeGuesser/Native/NativeTypeGuesser.php',
    ]);

    $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_82,
        PHPUnitLevelSetList::UP_TO_PHPUNIT_100,
        SymfonyLevelSetList::UP_TO_SYMFONY_60,
    ]);
};
