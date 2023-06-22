<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class OrganizationJsonld
{
    /**
     * @var mixed|null
     */
    protected $context;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $id2;
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

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    public function setContext(mixed $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getId2(): ?string
    {
        return $this->id2;
    }

    public function setId2(?string $id2): self
    {
        $this->id2 = $id2;

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
