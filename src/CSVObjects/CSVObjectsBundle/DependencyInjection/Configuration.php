<?php

namespace CSVObjects\CSVObjectsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('csv_objects');
        $rootNode = $treeBuilder->getRootNode();

        $rootNodeChildren = $rootNode->children();

        $rootNodeChildren->variableNode('classes')->end();

        return $treeBuilder;
    }
}
