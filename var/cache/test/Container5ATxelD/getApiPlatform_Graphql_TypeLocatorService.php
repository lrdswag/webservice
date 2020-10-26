<?php

namespace Container5ATxelD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_TypeLocatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.graphql.type_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.graphql.type_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'api_platform.graphql.iterable_type' => ['privates', 'api_platform.graphql.iterable_type', 'getApiPlatform_Graphql_IterableTypeService', true],
            'api_platform.graphql.upload_type' => ['privates', 'api_platform.graphql.upload_type', 'getApiPlatform_Graphql_UploadTypeService', true],
        ], [
            'api_platform.graphql.iterable_type' => '?',
            'api_platform.graphql.upload_type' => '?',
        ]);
    }
}
