<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeneratorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Faker\Generator' shared service.
     *
     * @return \Faker\Generator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/fzaninotto/faker/src/Faker/Generator.php';
        include_once \dirname(__DIR__, 4).'/vendor/fzaninotto/faker/src/Faker/Factory.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Faker/Provider/AliceProvider.php';

        $container->services['Faker\\Generator'] = $instance = \Faker\Factory::create('en_US');

        $instance->seed(1);
        $instance->addProvider(($container->privates['nelmio_alice.faker.provider.alice'] ?? ($container->privates['nelmio_alice.faker.provider.alice'] = new \Nelmio\Alice\Faker\Provider\AliceProvider())));

        return $instance;
    }
}
