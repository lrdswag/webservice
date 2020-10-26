<?php

namespace ContainerTpY3wNE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_Command_ExportCommandService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.graphql.command.export_command' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\GraphQlExportCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Command/GraphQlExportCommand.php';

        $container->privates['api_platform.graphql.command.export_command'] = $instance = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\GraphQlExportCommand(($container->privates['api_platform.graphql.schema_builder'] ?? $container->load('getApiPlatform_Graphql_SchemaBuilderService')));

        $instance->setName('api:graphql:export');

        return $instance;
    }
}
