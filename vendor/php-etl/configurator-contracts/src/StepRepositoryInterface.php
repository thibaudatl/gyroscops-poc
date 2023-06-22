<?php

declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

interface StepRepositoryInterface extends RepositoryInterface
{
    public function getBuilder(): StepBuilderInterface;
}
