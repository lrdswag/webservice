<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_TypeBuilderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.graphql.type_builder' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Type\TypeBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypeBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypeBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesContainerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesContainer.php';

        return $container->privates['api_platform.graphql.type_builder'] = new \ApiPlatform\Core\GraphQl\Type\TypeBuilder(($container->privates['api_platform.graphql.types_container'] ?? ($container->privates['api_platform.graphql.types_container'] = new \ApiPlatform\Core\GraphQl\Type\TypesContainer())), ($container->privates['api_platform.graphql.resolver.resource_field'] ?? $container->load('getApiPlatform_Graphql_Resolver_ResourceFieldService')), ($container->privates['api_platform.graphql.fields_builder_locator'] ?? $container->load('getApiPlatform_Graphql_FieldsBuilderLocatorService')));
    }
}
