<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHautelookAlice_Alice_FileLocator_KernelService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'hautelook_alice.alice.file_locator.kernel' shared service.
     *
     * @return \Hautelook\AliceBundle\Alice\FileLocator\KernelFileLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Alice/FileLocator/KernelFileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FileLocator/DefaultFileLocator.php';

        return $container->privates['hautelook_alice.alice.file_locator.kernel'] = new \Hautelook\AliceBundle\Alice\FileLocator\KernelFileLocator(($container->privates['nelmio_alice.file_locator.default'] ?? ($container->privates['nelmio_alice.file_locator.default'] = new \Nelmio\Alice\FileLocator\DefaultFileLocator())), ($container->services['kernel'] ?? $container->get('kernel', 1)));
    }
}
