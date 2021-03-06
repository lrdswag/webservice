<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_TypeConverterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.graphql.type_converter' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Type\TypeConverter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypeConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypeConverter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesContainerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesContainer.php';

        return $container->privates['api_platform.graphql.type_converter'] = new \ApiPlatform\Core\GraphQl\Type\TypeConverter(($container->privates['api_platform.graphql.type_builder'] ?? $container->load('getApiPlatform_Graphql_TypeBuilderService')), ($container->privates['api_platform.graphql.types_container'] ?? ($container->privates['api_platform.graphql.types_container'] = new \ApiPlatform\Core\GraphQl\Type\TypesContainer())), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }
}
