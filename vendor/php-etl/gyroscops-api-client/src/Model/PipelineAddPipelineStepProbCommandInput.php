<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class PipelineAddPipelineStepProbCommandInput
{
    /**
     * @var Probe|null
     */
    protected $probe;

    public function getProbe(): ?Probe
    {
        return $this->probe;
    }

    public function setProbe(?Probe $probe): self
    {
        $this->probe = $probe;

        return $this;
    }
}
