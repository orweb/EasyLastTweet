<?php

namespace Orweb\EasyLastTweetBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('orweb_easy_last_tweet');

        $rootNode
            ->children()
            ->arrayNode('twitter')
            ->children()
            ->scalarNode('consumer_key')->isRequired()->end()
            ->scalarNode('consumer_secret')->isRequired()->end()
            ->scalarNode('token')->isRequired()->end()
            ->scalarNode('token_secret')->isRequired()->end()
            ->end()
            ->end() // twitter
            ->arrayNode('template')
            ->children()
            ->scalarNode('path')->end()
            ->end() // template
            ->end()
        ;
        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
