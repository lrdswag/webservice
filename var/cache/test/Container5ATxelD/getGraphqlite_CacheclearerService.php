<?php

namespace Container5ATxelD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGraphqlite_CacheclearerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'graphqlite.cacheclearer' shared autowired service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $container->privates['graphqlite.cacheclearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer([0 => ($container->privates['graphqlite.phpfilescache'] ?? $container->load('getGraphqlite_PhpfilescacheService'))]);
    }
}
