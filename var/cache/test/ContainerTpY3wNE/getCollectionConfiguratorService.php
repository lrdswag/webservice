<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCollectionConfiguratorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Field/FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/CollectionConfigurator.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CollectionConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator();
    }
}
