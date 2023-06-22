<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class EnvironmentSecretsGetResponse200
{
    /**
     * @var SecretJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var EnvironmentSecretsGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var EnvironmentSecretsGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return SecretJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param SecretJsonld[]|null $hydraMember
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

    public function getHydraView(): ?EnvironmentSecretsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?EnvironmentSecretsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?EnvironmentSecretsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?EnvironmentSecretsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
