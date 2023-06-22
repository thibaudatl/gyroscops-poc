<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class RuntimeWorkflowPipelinesGetResponse200
{
    /**
     * @var WorkflowJobPipelineJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimeWorkflowPipelinesGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var RuntimeWorkflowPipelinesGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return WorkflowJobPipelineJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param WorkflowJobPipelineJsonld[]|null $hydraMember
     */
    public function setHydraMember(?array $hydraMember): self
    {
        $this->hydraMember = $hydraMember;

        return $this;
    }

    public function getHydraTotalItems(): ?int
    {
        return $this->hydraTotalItems;
    }

    public function setHydraTotalItems(?int $hydraTotalItems): self
    {
        $this->hydraTotalItems = $hydraTotalItems;

        return $this;
    }

    public function getHydraView(): ?RuntimeWorkflowPipelinesGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?RuntimeWorkflowPipelinesGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?RuntimeWorkflowPipelinesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?RuntimeWorkflowPipelinesGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
