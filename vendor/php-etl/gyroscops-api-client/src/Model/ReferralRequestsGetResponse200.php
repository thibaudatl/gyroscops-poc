<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class ReferralRequestsGetResponse200
{
    /**
     * @var ReferralRequestJsonldReferralRequestRead[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var ReferralRequestsGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var ReferralRequestsGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return ReferralRequestJsonldReferralRequestRead[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param ReferralRequestJsonldReferralRequestRead[]|null $hydraMember
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

    public function getHydraView(): ?ReferralRequestsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?ReferralRequestsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?ReferralRequestsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?ReferralRequestsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
