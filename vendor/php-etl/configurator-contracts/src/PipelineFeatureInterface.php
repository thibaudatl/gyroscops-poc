<?php

declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

interface PipelineFeatureInterface extends FactoryInterface
{
    public function interpreter(): ExpressionLanguage;

    public function configuration(): FeatureConfigurationInterface;
}
