<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_MutationResolverLocatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.graphql.mutation_resolver_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.graphql.mutation_resolver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], []);
    }
}
