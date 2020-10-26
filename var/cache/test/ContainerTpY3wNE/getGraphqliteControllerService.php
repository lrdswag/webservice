<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGraphqliteControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'TheCodingMachine\Graphqlite\Bundle\Controller\GraphqliteController' shared autowired service.
     *
     * @return \TheCodingMachine\Graphqlite\Bundle\Controller\GraphqliteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/thecodingmachine/graphqlite-bundle/Controller/GraphqliteController.php';

        return $container->services['TheCodingMachine\\Graphqlite\\Bundle\\Controller\\GraphqliteController'] = new \TheCodingMachine\Graphqlite\Bundle\Controller\GraphqliteController(($container->privates['GraphQL\\Server\\ServerConfig'] ?? $container->load('getServerConfigService')), ($container->privates['sensio_framework_extra.psr7.http_message_factory'] ?? $container->load('getSensioFrameworkExtra_Psr7_HttpMessageFactoryService')));
    }
}
