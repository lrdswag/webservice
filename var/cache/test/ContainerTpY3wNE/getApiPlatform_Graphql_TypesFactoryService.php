<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_TypesFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.graphql.types_factory' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Type\TypesFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesFactory.php';

        return $container->privates['api_platform.graphql.types_factory'] = new \ApiPlatform\Core\GraphQl\Type\TypesFactory(($container->privates['api_platform.graphql.type_locator'] ?? $container->load('getApiPlatform_Graphql_TypeLocatorService')), [0 => 'api_platform.graphql.iterable_type', 1 => 'api_platform.graphql.upload_type']);
    }
}
