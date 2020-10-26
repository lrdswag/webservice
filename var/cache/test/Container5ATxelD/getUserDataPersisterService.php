<?php

namespace Container5ATxelD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserDataPersisterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\DataPersister\UserDataPersister' shared autowired service.
     *
     * @return \App\DataPersister\UserDataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/DataPersister/UserDataPersister.php';

        return $container->privates['App\\DataPersister\\UserDataPersister'] = new \App\DataPersister\UserDataPersister(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')));
    }
}
