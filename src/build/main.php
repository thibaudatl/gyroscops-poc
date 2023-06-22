<?php

use Kiboko\Component\Runtime\Pipeline\PipelineRuntimeInterface;

require __DIR__ . '/vendor/autoload.php';

/** @var PipelineRuntimeInterface $runtime */
$runtime = require __DIR__ . '/runtime.php';

/** @var callable(runtime: RuntimeInterface): RuntimeInterface $pipeline */
$pipeline = require __DIR__ . '/pipeline.php';

chdir(__DIR__);

$pipeline($runtime);
$runtime->run();