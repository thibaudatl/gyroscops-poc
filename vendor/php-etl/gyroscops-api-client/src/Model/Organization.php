<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class Organization
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string[]|null
     */
    protected $authorizations;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $slug;
    /**
     * @var string[]|null
     */
    protected $users;
    /**
     * @var string[]|null
     */
    protected $externalCollaborators;
    /**
     * @var string[]|null
     */
    protected $workspaces;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAuthorizations(): ?array
    {
        return $this->authorizations;
    }

    /**
     * @param string[]|null $authorizations
     */
    public function setAuthorizations(?array $authorizations): self
    {
        $this->authorizations = $authorizations;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * @param string[]|null $users
     */
    public function setUsers(?array $users): self
    {
        $this->users = $users;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getExternalCollaborators(): ?array
    {
        return $this->externalCollaborators;
    }

    /**
     * @param string[]|null $externalCollaborators
     */
    public function setExternalCollaborators(?array $externalCollaborators): self
    {
        $this->externalCollaborators = $externalCollaborators;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getWorkspaces(): ?array
    {
        return $this->workspaces;
    }

    /**
     * @param string[]|null $workspaces
     */
    public function setWorkspaces(?array $workspaces): self
    {
        $this->workspaces = $workspaces;

        return $this;
    }
}
