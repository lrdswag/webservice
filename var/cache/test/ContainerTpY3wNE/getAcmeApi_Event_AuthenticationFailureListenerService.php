<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAcmeApi_Event_AuthenticationFailureListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'acme_api.event.authentication_failure_listener' shared autowired service.
     *
     * @return \App\EventListener\AuthenticationFailureResponse
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventListener/AuthenticationFailureResponse.php';

        return $container->privates['acme_api.event.authentication_failure_listener'] = new \App\EventListener\AuthenticationFailureResponse();
    }
}