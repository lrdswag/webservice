<?php

namespace Container5ATxelD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClassMakerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Maker\ClassMaker' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Maker\ClassMaker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Maker/ClassMaker.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Maker\\ClassMaker'] = new \EasyCorp\Bundle\EasyAdminBundle\Maker\ClassMaker(($container->services['kernel'] ?? $container->get('kernel', 1)), \dirname(__DIR__, 4));
    }
}
