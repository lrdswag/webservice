<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHautelookAlice_Resolver_Bundle_SimpleResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'hautelook_alice.resolver.bundle.simple_resolver' shared service.
     *
     * @return \Hautelook\AliceBundle\Resolver\Bundle\SimpleBundleResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/BundleResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Resolver/Bundle/SimpleBundleResolver.php';

        return $container->privates['hautelook_alice.resolver.bundle.simple_resolver'] = new \Hautelook\AliceBundle\Resolver\Bundle\SimpleBundleResolver(($container->services['kernel'] ?? $container->get('kernel', 1)));
    }
}
