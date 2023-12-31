<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class AuthenticationUsersGetResponse200
{
    /**
     * @var UserJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationUsersGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var AuthenticationUsersGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return UserJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param UserJsonld[]|null $hydraMember
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

    public function getHydraView(): ?AuthenticationUsersGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?AuthenticationUsersGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?AuthenticationUsersGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?AuthenticationUsersGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
