<?php

namespace Container5ATxelD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Identifier_UuidNormalizerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.identifier.uuid_normalizer' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\RamseyUuid\Identifier\Normalizer\UuidNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/RamseyUuid/Identifier/Normalizer/UuidNormalizer.php';

        return $container->privates['api_platform.identifier.uuid_normalizer'] = new \ApiPlatform\Core\Bridge\RamseyUuid\Identifier\Normalizer\UuidNormalizer();
    }
}
