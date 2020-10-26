<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTest_ApiPlatform_ClientService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'test.api_platform.client' service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\Test\Client
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-client/HttpClientTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Test/Client.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/browser-kit/AbstractBrowser.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernelBrowser.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/KernelBrowser.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/browser-kit/History.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/browser-kit/CookieJar.php';

        $container->factories['test.api_platform.client'] = function () use ($container) {
            return new \ApiPlatform\Core\Bridge\Symfony\Bundle\Test\Client(new \Symfony\Bundle\FrameworkBundle\KernelBrowser(($container->services['kernel'] ?? $container->get('kernel', 1)), [], (new \Symfony\Component\BrowserKit\History()), (new \Symfony\Component\BrowserKit\CookieJar())));
        };

        return $container->factories['test.api_platform.client']();
    }
}
