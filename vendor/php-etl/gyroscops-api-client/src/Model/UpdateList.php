<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class UpdateList
{
    /**
     * @var mixed|null
     */
    protected $iterator;

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
