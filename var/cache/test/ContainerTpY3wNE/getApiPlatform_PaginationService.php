<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_PaginationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.pagination' shared service.
     *
     * @return \ApiPlatform\Core\DataProvider\Pagination
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/Pagination.php';

        return $container->privates['api_platform.pagination'] = new \ApiPlatform\Core\DataProvider\Pagination(($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), $container->parameters['api_platform.collection.pagination'], $container->parameters['api_platform.graphql.collection.pagination']);
    }
}
