<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class GatewayAkeneoInstanceFromUrlGetResponse200
{
    /**
     * @var AkeneoInstanceJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var GatewayAkeneoInstanceFromUrlGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var GatewayAkeneoInstanceFromUrlGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return AkeneoInstanceJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param AkeneoInstanceJsonld[]|null $hydraMember
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

    public function getHydraView(): ?GatewayAkeneoInstanceFromUrlGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?GatewayAkeneoInstanceFromUrlGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?GatewayAkeneoInstanceFromUrlGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?GatewayAkeneoInstanceFromUrlGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}