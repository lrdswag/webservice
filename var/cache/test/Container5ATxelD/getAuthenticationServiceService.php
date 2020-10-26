<?php

namespace Container5ATxelD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthenticationServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'TheCodingMachine\Graphqlite\Bundle\Security\AuthenticationService' shared autowired service.
     *
     * @return \TheCodingMachine\Graphqlite\Bundle\Security\AuthenticationService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/thecodingmachine/graphqlite/src/Security/AuthenticationServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/thecodingmachine/graphqlite-bundle/Security/AuthenticationService.php';

        return $container->privates['TheCodingMachine\\Graphqlite\\Bundle\\Security\\AuthenticationService'] = new \TheCodingMachine\Graphqlite\Bundle\Security\AuthenticationService(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()));
    }
}