<?php

namespace Container5ATxelD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_Resolver_Stage_SerializeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.graphql.resolver.stage.serialize' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Resolver\Stage\SerializeStage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/SerializeStageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/SerializeStage.php';

        return $container->privates['api_platform.graphql.resolver.stage.serialize'] = new \ApiPlatform\Core\GraphQl\Resolver\Stage\SerializeStage(($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($container->services['serializer'] ?? $container->getSerializerService()), ($container->privates['api_platform.graphql.serializer.context_builder'] ?? $container->load('getApiPlatform_Graphql_Serializer_ContextBuilderService')), ($container->privates['api_platform.pagination'] ?? $container->load('getApiPlatform_PaginationService')));
    }
}
