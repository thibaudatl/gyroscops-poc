<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class AbstractPipeline
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $label;
    /**
     * @var string|null
     */
    protected $runtimeType;
    /**
     * @var string[]|null
     */
    protected $runtime;
    /**
     * @var string[]|null
     */
    protected $autoload;
    /**
     * @var string[]|null
     */
    protected $packages;
    /**
     * @var string[]|null
     */
    protected $repositories;
    /**
     * @var string[]|null
     */
    protected $auths;
    /**
     * @var string[]|null
     */
    protected $steps;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getRuntimeType(): ?string
    {
        return $this->runtimeType;
    }

    public function setRuntimeType(?string $runtimeType): self
    {
        $this->runtimeType = $runtimeType;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getRuntime(): ?array
    {
        return $this->runtime;
    }

    /**
     * @param string[]|null $runtime
     */
    public function setRuntime(?array $runtime): self
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAutoload(): ?array
    {
        return $this->autoload;
    }

    /**
     * @param string[]|null $autoload
     */
    public function setAutoload(?array $autoload): self
    {
        $this->autoload = $autoload;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPackages(): ?array
    {
        return $this->packages;
    }

    /**
     * @param string[]|null $packages
     */
    public function setPackages(?array $packages): self
    {
        $this->packages = $packages;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getRepositories(): ?array
    {
        return $this->repositories;
    }

    /**
     * @param string[]|null $repositories
     */
    public function setRepositories(?array $repositories): self
    {
        $this->repositories = $repositories;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAuths(): ?array
    {
        return $this->auths;
    }

    /**
     * @param string[]|null $auths
     */
    public function setAuths(?array $auths): self
    {
        $this->auths = $auths;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getSteps(): ?array
    {
        return $this->steps;
    }

    /**
     * @param string[]|null $steps
     */
    public function setSteps(?array $steps): self
    {
        $this->steps = $steps;

        return $this;
    }
}
