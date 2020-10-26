<?php

namespace Container6mqQtUC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGraphqliteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'TheCodingMachine\Graphqlite\Bundle\Controller\GraphqliteController' shared autowired service.
     *
     * @return \TheCodingMachine\Graphqlite\Bundle\Controller\GraphqliteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/thecodingmachine/graphqlite-bundle/Controller/GraphqliteController.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Server/ServerConfig.php';
        include_once \dirname(__DIR__, 4).'/vendor/thecodingmachine/graphqlite-bundle/Server/ServerConfig.php';

        $a = new \TheCodingMachine\Graphqlite\Bundle\Server\ServerConfig();
        $a->setSchema(($container->services['TheCodingMachine\\GraphQLite\\Schema'] ?? $container->load('getSchemaService')));
        $a->setErrorFormatter([0 => '\\TheCodingMachine\\GraphQLite\\Exceptions\\WebonyxErrorHandler', 1 => 'errorFormatter']);
        $a->setErrorsHandler([0 => '\\TheCodingMachine\\GraphQLite\\Exceptions\\WebonyxErrorHandler', 1 => 'errorHandler']);
        $a->setDebug(8);
        $a->setValidationRules([]);

        return $container->services['TheCodingMachine\\Graphqlite\\Bundle\\Controller\\GraphqliteController'] = new \TheCodingMachine\Graphqlite\Bundle\Controller\GraphqliteController($a, ($container->privates['sensio_framework_extra.psr7.http_message_factory'] ?? $container->load('getSensioFrameworkExtra_Psr7_HttpMessageFactoryService')));
    }
}
