<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/(index)?(?:\\.([^/]++))?(*:31)'
                .'|/docs(?:\\.([^/]++))?(*:58)'
                .'|/co(?'
                    .'|ntexts/(.+)(?:\\.([^/]++))?(*:97)'
                    .'|mments(?'
                        .'|(?:\\.([^/]++))?(?'
                            .'|(*:131)'
                        .')'
                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                            .'|(*:169)'
                        .')'
                    .')'
                .')'
                .'|/shifts(?'
                    .'|(?:\\.([^/]++))?(?'
                        .'|(*:208)'
                    .')'
                    .'|/(?'
                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                            .'|(*:249)'
                        .')'
                        .'|([^/]++)/comments(?:\\.([^/]++))?(*:290)'
                    .')'
                .')'
                .'|/users(?'
                    .'|(?:\\.([^/]++))?(?'
                        .'|(*:327)'
                    .')'
                    .'|/(?'
                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                            .'|(*:368)'
                        .')'
                        .'|([^/]++)/(?'
                            .'|shifts(?'
                                .'|(?:\\.([^/]++))?(*:413)'
                                .'|/([^/]++)/comments(?:\\.([^/]++))?(*:454)'
                            .')'
                            .'|comments(?:\\.([^/]++))?(*:486)'
                            .'|received_comments(?:\\.([^/]++))?(*:526)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        58 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        97 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        131 => [
            [['_route' => 'api_comments_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comments_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        169 => [
            [['_route' => 'api_comments_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comments_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_comments_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        208 => [
            [['_route' => 'api_shifts_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ScheduledShift', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shifts_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ScheduledShift', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        249 => [
            [['_route' => 'api_shifts_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ScheduledShift', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shifts_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ScheduledShift', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_shifts_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ScheduledShift', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        290 => [[['_route' => 'api_shifts_comments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_subresource_operation_name' => 'api_shifts_comments_get_subresource', '_api_subresource_context' => ['property' => 'comments', 'identifiers' => [['id', 'App\\Entity\\ScheduledShift', true]], 'collection' => true, 'operationId' => 'api_shifts_comments_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        327 => [
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        368 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        413 => [[['_route' => 'api_users_shifts_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\ScheduledShift', '_api_subresource_operation_name' => 'api_users_shifts_get_subresource', '_api_subresource_context' => ['property' => 'shifts', 'identifiers' => [['id', 'App\\Entity\\User', true]], 'collection' => true, 'operationId' => 'api_users_shifts_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        454 => [[['_route' => 'api_users_shifts_comments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_subresource_operation_name' => 'api_users_shifts_comments_get_subresource', '_api_subresource_context' => ['property' => 'comments', 'identifiers' => [['id', 'App\\Entity\\User', true], ['shifts', 'App\\Entity\\ScheduledShift', true]], 'collection' => true, 'operationId' => 'api_users_shifts_comments_get_subresource']], ['id', 'shifts', '_format'], ['GET' => 0], null, false, true, null]],
        486 => [[['_route' => 'api_users_comments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_subresource_operation_name' => 'api_users_comments_get_subresource', '_api_subresource_context' => ['property' => 'comments', 'identifiers' => [['id', 'App\\Entity\\User', true]], 'collection' => true, 'operationId' => 'api_users_comments_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        526 => [
            [['_route' => 'api_users_received_comments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\ShiftComments', '_api_subresource_operation_name' => 'api_users_received_comments_get_subresource', '_api_subresource_context' => ['property' => 'receivedComments', 'identifiers' => [['id', 'App\\Entity\\User', true]], 'collection' => true, 'operationId' => 'api_users_received_comments_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
