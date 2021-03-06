<?php

namespace ContainerEQUhxVp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MHtnt5YService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MHtnt5Y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MHtnt5Y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
            'repository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'encoder' => '?',
            'repository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
