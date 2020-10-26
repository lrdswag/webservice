<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMeControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'TheCodingMachine\Graphqlite\Bundle\Controller\GraphQL\MeController' shared autowired service.
     *
     * @return \TheCodingMachine\Graphqlite\Bundle\Controller\GraphQL\MeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/thecodingmachine/graphqlite-bundle/Controller/GraphQL/MeController.php';

        return $container->services['TheCodingMachine\\Graphqlite\\Bundle\\Controller\\GraphQL\\MeController'] = new \TheCodingMachine\Graphqlite\Bundle\Controller\GraphQL\MeController(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()));
    }
}
