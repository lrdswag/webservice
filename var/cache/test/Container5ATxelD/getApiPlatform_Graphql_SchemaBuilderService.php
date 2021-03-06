<?php

namespace Container5ATxelD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_SchemaBuilderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.graphql.schema_builder' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Type\SchemaBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/SchemaBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/SchemaBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesContainerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesContainer.php';

        return $container->privates['api_platform.graphql.schema_builder'] = new \ApiPlatform\Core\GraphQl\Type\SchemaBuilder(($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($container->privates['api_platform.graphql.types_factory'] ?? $container->load('getApiPlatform_Graphql_TypesFactoryService')), ($container->privates['api_platform.graphql.types_container'] ?? ($container->privates['api_platform.graphql.types_container'] = new \ApiPlatform\Core\GraphQl\Type\TypesContainer())), ($container->privates['api_platform.graphql.fields_builder'] ?? $container->load('getApiPlatform_Graphql_FieldsBuilderService')));
    }
}
