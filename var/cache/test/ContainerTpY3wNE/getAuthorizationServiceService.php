<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorizationServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'TheCodingMachine\Graphqlite\Bundle\Security\AuthorizationService' shared autowired service.
     *
     * @return \TheCodingMachine\Graphqlite\Bundle\Security\AuthorizationService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/thecodingmachine/graphqlite/src/Security/AuthorizationServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/thecodingmachine/graphqlite-bundle/Security/AuthorizationService.php';

        return $container->privates['TheCodingMachine\\Graphqlite\\Bundle\\Security\\AuthorizationService'] = new \TheCodingMachine\Graphqlite\Bundle\Security\AuthorizationService(($container->services['security.authorization_checker'] ?? $container->getSecurity_AuthorizationCheckerService()), ($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()));
    }
}
