<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/accueil' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/admin/accueil' => [[['_route' => 'app_admin_accueil_index', '_controller' => 'App\\Controller\\AdminAccueilController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/accueil/new' => [[['_route' => 'app_admin_accueil_new', '_controller' => 'App\\Controller\\AdminAccueilController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/rncp' => [[['_route' => 'app_admin_rncp_index', '_controller' => 'App\\Controller\\AdminRncpController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/rncp/new' => [[['_route' => 'app_admin_rncp_new', '_controller' => 'App\\Controller\\AdminRncpController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/team' => [[['_route' => 'app_admin_team', '_controller' => 'App\\Controller\\AdminTeamController::index'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'app_team', '_controller' => 'App\\Controller\\TeamController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|accueil/([^/]++)(?'
                        .'|(*:36)'
                        .'|/edit(*:48)'
                        .'|(*:55)'
                    .')'
                    .'|rncp/([^/]++)(?'
                        .'|(*:79)'
                        .'|/edit(*:91)'
                        .'|(*:98)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:138)'
                    .'|wdt/([^/]++)(*:158)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:204)'
                            .'|router(*:218)'
                            .'|exception(?'
                                .'|(*:238)'
                                .'|\\.css(*:251)'
                            .')'
                        .')'
                        .'|(*:261)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'app_admin_accueil_show', '_controller' => 'App\\Controller\\AdminAccueilController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        48 => [[['_route' => 'app_admin_accueil_edit', '_controller' => 'App\\Controller\\AdminAccueilController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        55 => [[['_route' => 'app_admin_accueil_delete', '_controller' => 'App\\Controller\\AdminAccueilController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        79 => [[['_route' => 'app_admin_rncp_show', '_controller' => 'App\\Controller\\AdminRncpController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        91 => [[['_route' => 'app_admin_rncp_edit', '_controller' => 'App\\Controller\\AdminRncpController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        98 => [[['_route' => 'app_admin_rncp_delete', '_controller' => 'App\\Controller\\AdminRncpController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        138 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        158 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        204 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        218 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        238 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        251 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        261 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
