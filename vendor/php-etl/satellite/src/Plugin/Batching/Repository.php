<?php

declare(strict_types=1);

namespace Kiboko\Component\Satellite\Plugin\Batching;

use Kiboko\Component\Satellite\Plugin\Batching\Builder\Fork;
use Kiboko\Component\Satellite\Plugin\Batching\Builder\Merge;
use Kiboko\Contract\Configurator;
use Kiboko\Contract\Packaging;

final readonly class Repository implements Configurator\StepRepositoryInterface
{
    public function __construct(private Merge|Fork $builder)
    {
    }

    public function addFiles(Packaging\FileInterface|Packaging\DirectoryInterface ...$files): self
    {
        return $this;
    }

    public function getFiles(): iterable
    {
        return new \EmptyIterator();
    }

    public function addPackages(string ...$packages): self
    {
        return $this;
    }

    public function getPackages(): iterable
    {
        return new \EmptyIterator();
    }

    public function getBuilder(): Merge|Fork
    {
        return $this->builder;
    }

    public function merge(Configurator\RepositoryInterface $friend): self
    {
        return $this;
    }
}
