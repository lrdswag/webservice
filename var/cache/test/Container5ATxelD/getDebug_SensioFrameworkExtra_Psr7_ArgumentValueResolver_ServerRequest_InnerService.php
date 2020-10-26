<?php

namespace Container5ATxelD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_SensioFrameworkExtra_Psr7_ArgumentValueResolver_ServerRequest_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.sensio_framework_extra.psr7.argument_value_resolver.server_request.inner' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentValueResolver\Psr7ServerRequestResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ArgumentValueResolver/Psr7ServerRequestResolver.php';

        return $container->privates['debug.sensio_framework_extra.psr7.argument_value_resolver.server_request.inner'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentValueResolver\Psr7ServerRequestResolver(($container->privates['sensio_framework_extra.psr7.http_message_factory'] ?? $container->load('getSensioFrameworkExtra_Psr7_HttpMessageFactoryService')));
    }
}