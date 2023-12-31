<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class AkeneoInstanceAkeneoInstanceInput
{
    /**
     * @var string|null
     */
    protected $pimUrl;
    /**
     * @var string|null
     */
    protected $organization;
    /**
     * @var CreateSecretInput|null
     */
    protected $secret;

    public function getPimUrl(): ?string
    {
        return $this->pimUrl;
    }

    public function setPimUrl(?string $pimUrl): self
    {
        $this->pimUrl = $pimUrl;

        return $this;
    }

    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    public function setOrganization(?string $organization): self
    {
        $this->organization = $organization;

        return $this;
    }

    public function getSecret(): ?CreateSecretInput
    {
        return $this->secret;
    }

    public function setSecret(?CreateSecretInput $secret): self
    {
        $this->secret = $secret;

        return $this;
    }
}
