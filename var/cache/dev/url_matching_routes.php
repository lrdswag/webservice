<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/graphiql' => [[['_route' => 'overblog_graphiql_endpoint', '_controller' => 'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController::indexAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'api_login', '_controller' => 'App\\Controller\\SecurityController::loginAPI'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null],
        ],
        '/test-login' => [[['_route' => 'test_login', '_controller' => 'App\\Controller\\SecurityController::testLogin'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/graphql/graphiql' => [[['_route' => 'api_graphql_graphiql', '_controller' => 'api_platform.graphql.action.graphiql', '_graphql' => true], null, null, null, false, false, null]],
        '/graphql/graphql_playground' => [[['_route' => 'api_graphql_graphql_playground', '_controller' => 'api_platform.graphql.action.graphql_playground', '_graphql' => true], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', 'template' => 'admin.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
        '/api/graphql' => [[['_route' => 'api_graphql_entrypoint', '_controller' => 'api_platform.graphql.action.entrypoint'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityContoller::register'], null, null, null, false, false, null]],
        '/token/refresh' => [[['_route' => 'gesdinet_jwt_refresh_token', '_controller' => 'gesdinet.jwtrefreshtoken::refresh'], null, null, null, false, false, null]],
        '/graphql' => [[['_route' => 'graphqliteRoute', '_controller' => 'TheCodingMachine\\Graphqlite\\Bundle\\Controller\\GraphqliteController::handleRequest'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/graphiql/([^/]++)(*:187)'
                .'|/(index)?(?:\\.([^/]++))?(*:219)'
                .'|/docs(?:\\.([^/]++))?(*:247)'
                .'|/co(?'
                    .'|ntexts/(.+)(?:\\.([^/]++))?(*:287)'
                    .'|mments(?'
                        .'|(?:\\.([^/]++))?(?'
                            .'|(*:322)'
                        .')'
                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                            .'|(*:360)'
                        .')'
                    .')'
                .')'
                .'|/shifts(?'
                    .'|(?:\\.([^/]++))?(?'
                        .'|(*:399)'
                    .')'
                    .'|/(?'
                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                            .'|(*:440)'
                        .')'
                        .'|([^/]++)/comments(?:\\.([^/]++))?(*:481)'
                    .')'
                .')'
                .'|/users(?'
                    .'|(?:\\.([^/]++))?(?'
                        .'|(*:518)'
                    .')'
                    .'|/(?'
                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                            .'|(*:559)'
                        .')'
                        .'|([^/]++)/(?'
                            .'|shifts(?'
                                .'|(?:\\.([^/]++))?(*:604)'
                                .'|/([^/]++)/comments(?:\\.([^/]++))?(*:645)'
                            .')'
                            .'|comments(?:\\.([^/]++))?(*:677)'
                            .'|received_comments(?:\\.([^/]++))?(*:717)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'overblog_graphiql_endpoint_multiple', '_controller' => 'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController::indexAction'], ['schemaName'], null, null, false, true, null]],
        219 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        247 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        287 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        322 => [
            [['_route' => 'api_comments_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comments_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        360 => [
            [['_route' => 'api_comments_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comments_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_comments_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        399 => [
            [['_route' => 'api_shifts_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ScheduledShift', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shifts_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ScheduledShift', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        440 => [
            [['_route' => 'api_shifts_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ScheduledShift', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shifts_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ScheduledShift', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_shifts_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ScheduledShift', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        481 => [[['_route' => 'api_shifts_comments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_subresource_operation_name' => 'api_shifts_comments_get_subresource', '_api_subresource_context' => ['property' => 'comments', 'identifiers' => [['id', 'App\\Entity\\ScheduledShift', true]], 'collection' => true, 'operationId' => 'api_shifts_comments_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        518 => [
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        559 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        604 => [[['_route' => 'api_users_shifts_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\ScheduledShift', '_api_subresource_operation_name' => 'api_users_shifts_get_subresource', '_api_subresource_context' => ['property' => 'shifts', 'identifiers' => [['id', 'App\\Entity\\User', true]], 'collection' => true, 'operationId' => 'api_users_shifts_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        645 => [[['_route' => 'api_users_shifts_comments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_subresource_operation_name' => 'api_users_shifts_comments_get_subresource', '_api_subresource_context' => ['property' => 'comments', 'identifiers' => [['id', 'App\\Entity\\User', true], ['shifts', 'App\\Entity\\ScheduledShift', true]], 'collection' => true, 'operationId' => 'api_users_shifts_comments_get_subresource']], ['id', 'shifts', '_format'], ['GET' => 0], null, false, true, null]],
        677 => [[['_route' => 'api_users_comments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_subresource_operation_name' => 'api_users_comments_get_subresource', '_api_subresource_context' => ['property' => 'comments', 'identifiers' => [['id', 'App\\Entity\\User', true]], 'collection' => true, 'operationId' => 'api_users_comments_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        717 => [
            [['_route' => 'api_users_received_comments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_subresource_operation_name' => 'api_users_received_comments_get_subresource', '_api_subresource_context' => ['property' => 'receivedComments', 'identifiers' => [['id', 'App\\Entity\\User', true]], 'collection' => true, 'operationId' => 'api_users_received_comments_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
