<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class EnvironmentAddMultipleVariableFromSecretInputJsonld
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
     * @var VariableFromSecretInputJsonld[]|null
     */
    protected $variables;
    /**
     * @var TraversableJsonld|null
     */
    protected $iterator;

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

    /**
     * @return VariableFromSecretInputJsonld[]|null
     */
    public function getVariables(): ?array
    {
        return $this->variables;
    }

    /**
     * @param VariableFromSecretInputJsonld[]|null $variables
     */
    public function setVariables(?array $variables): self
    {
        $this->variables = $variables;

        return $this;
    }

    public function getIterator(): ?TraversableJsonld
    {
        return $this->iterator;
    }

    public function setIterator(?TraversableJsonld $iterator): self
    {
        $this->iterator = $iterator;

        return $this;
    }
}
