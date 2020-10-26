<?php

namespace Container6mqQtUC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGraphqlite_PhpfilescacheService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'graphqlite.phpfilescache' shared autowired service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpFilesAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/PhpFilesAdapter.php';

        $container->privates['graphqlite.phpfilescache'] = $instance = new \Symfony\Component\Cache\Adapter\PhpFilesAdapter('graphqlite');

        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        return $instance;
    }
}
