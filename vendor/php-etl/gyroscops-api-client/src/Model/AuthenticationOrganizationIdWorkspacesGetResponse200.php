<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class AuthenticationOrganizationIdWorkspacesGetResponse200
{
    /**
     * @var WorkspaceJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationOrganizationIdWorkspacesGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var AuthenticationOrganizationIdWorkspacesGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return WorkspaceJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param WorkspaceJsonld[]|null $hydraMember
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

    public function getHydraView(): ?AuthenticationOrganizationIdWorkspacesGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?AuthenticationOrganizationIdWorkspacesGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?AuthenticationOrganizationIdWorkspacesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?AuthenticationOrganizationIdWorkspacesGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}