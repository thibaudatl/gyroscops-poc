<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class EnvironmentAddMultipleVariableFromConstantInput
{
    /**
     * @var VariableFromConstantInput[]|null
     */
    protected $variables;
    /**
     * @var mixed|null
     */
    protected $iterator;

    /**
     * @return VariableFromConstantInput[]|null
     */
    public function getVariables(): ?array
    {
        return $this->variables;
    }

    /**
     * @param VariableFromConstantInput[]|null $variables
     */
    public function setVariables(?array $variables): self
    {
        $this->variables = $variables;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIterator()
    {
        return $this->iterator;
    }

    public function setIterator(mixed $iterator): self
    {
        $this->iterator = $iterator;

        return $this;
    }
}