<?php

declare(strict_types=1);

namespace Kiboko\Component\Satellite\Cloud\Command\Pipeline;

use Kiboko\Component\Satellite\Cloud\Command\Command;
use Kiboko\Component\Satellite\Cloud\DTO\PipelineId;
use Kiboko\Component\Satellite\Cloud\DTO\StepCode;

final class ReorderPipelineStepCommand implements Command
{
    /** @var list<StepCode> */
    public array $codes;

    public function __construct(
        public PipelineId $pipeline,
        StepCode ...$codes,
    ) {
        $this->codes = $codes;
    }
}
