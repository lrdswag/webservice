<?php

namespace Container5ATxelD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStaticClassListTypeMapperFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'TheCodingMachine\GraphQLite\Mappers\StaticClassListTypeMapperFactory' shared autowired service.
     *
     * @return \TheCodingMachine\GraphQLite\Mappers\StaticClassListTypeMapperFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/thecodingmachine/graphqlite/src/Mappers/TypeMapperFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/thecodingmachine/graphqlite/src/Mappers/StaticClassListTypeMapperFactory.php';

        return $container->privates['TheCodingMachine\\GraphQLite\\Mappers\\StaticClassListTypeMapperFactory'] = new \TheCodingMachine\GraphQLite\Mappers\StaticClassListTypeMapperFactory([0 => 'TheCodingMachine\\Graphqlite\\Bundle\\Types\\SymfonyUserInterfaceType']);
    }
}
