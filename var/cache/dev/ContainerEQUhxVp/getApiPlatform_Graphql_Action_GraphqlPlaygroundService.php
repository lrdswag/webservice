<?php

namespace ContainerEQUhxVp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_Action_GraphqlPlaygroundService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.graphql.action.graphql_playground' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Action\GraphQlPlaygroundAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Action/GraphQlPlaygroundAction.php';

        return $container->services['api_platform.graphql.action.graphql_playground'] = new \ApiPlatform\Core\GraphQl\Action\GraphQlPlaygroundAction(($container->services['twig'] ?? $container->getTwigService()), ($container->privates['api_platform.router'] ?? $container->getApiPlatform_RouterService()), true, '');
    }
}
