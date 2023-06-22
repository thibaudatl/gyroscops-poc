<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class AkeneoOauthTokenOauthStateInput
{
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var string[]|null
     */
    protected $scope;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getScope(): ?array
    {
        return $this->scope;
    }

    /**
     * @param string[]|null $scope
     */
    public function setScope(?array $scope): self
    {
        $this->scope = $scope;

        return $this;
    }
}