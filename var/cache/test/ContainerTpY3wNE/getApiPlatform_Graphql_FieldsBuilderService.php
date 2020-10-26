<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_FieldsBuilderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.graphql.fields_builder' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Type\FieldsBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/FieldsBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/FieldsBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesContainerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesContainer.php';

        return $container->privates['api_platform.graphql.fields_builder'] = new \ApiPlatform\Core\GraphQl\Type\FieldsBuilder(($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($container->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($container->privates['api_platform.graphql.types_container'] ?? ($container->privates['api_platform.graphql.types_container'] = new \ApiPlatform\Core\GraphQl\Type\TypesContainer())), ($container->privates['api_platform.graphql.type_builder'] ?? $container->load('getApiPlatform_Graphql_TypeBuilderService')), ($container->privates['api_platform.graphql.type_converter'] ?? $container->load('getApiPlatform_Graphql_TypeConverterService')), ($container->privates['api_platform.graphql.resolver.factory.item'] ?? $container->load('getApiPlatform_Graphql_Resolver_Factory_ItemService')), ($container->privates['api_platform.graphql.resolver.factory.collection'] ?? $container->load('getApiPlatform_Graphql_Resolver_Factory_CollectionService')), ($container->privates['api_platform.graphql.resolver.factory.item_mutation'] ?? $container->load('getApiPlatform_Graphql_Resolver_Factory_ItemMutationService')), ($container->privates['api_platform.filter_locator'] ?? $container->getApiPlatform_FilterLocatorService()), ($container->privates['api_platform.pagination'] ?? $container->load('getApiPlatform_PaginationService')), ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->getSerializer_NameConverter_MetadataAwareService()), '_');
    }
}