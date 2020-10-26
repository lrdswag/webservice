<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_Resolver_Stage_ValidateService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.graphql.resolver.stage.validate' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Resolver\Stage\ValidateStage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/ValidateStageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/ValidateStage.php';

        return $container->privates['api_platform.graphql.resolver.stage.validate'] = new \ApiPlatform\Core\GraphQl\Resolver\Stage\ValidateStage(($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($container->privates['api_platform.validator'] ?? $container->load('getApiPlatform_ValidatorService')));
    }
}