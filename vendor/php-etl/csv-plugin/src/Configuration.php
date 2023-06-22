<?php

declare(strict_types=1);

namespace Kiboko\Plugin\CSV;

use Kiboko\Contract\Configurator\PluginConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

final class Configuration implements PluginConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $extractor = new Configuration\Extractor();
        $loader = new Configuration\Loader();

        $builder = new TreeBuilder('csv');

        /* @phpstan-ignore-next-line */
        $builder->getRootNode()
            ->validate()
                ->ifTrue(fn (array $value) => \array_key_exists('extractor', $value) && \array_key_exists('loader', $value))
                ->thenInvalid('Your configuration should either contain the "extractor" or the "loader" key, not both.')
            ->end()
            ->children()
                ->arrayNode('expression_language')
                    ->scalarPrototype()->end()
                ->end()
                ->append(node: $extractor->getConfigTreeBuilder()->getRootNode())
                ->append(node: $loader->getConfigTreeBuilder()->getRootNode())
                ->variableNode('logger')
                    ->setDeprecated('php-etl/csv-plugin', '0.2')
                ->end()
            ->end()
        ;

        return $builder;
    }
}
