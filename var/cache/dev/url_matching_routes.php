<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/messages' => [[['_route' => 'app_messages', '_controller' => 'App\\Controller\\MessagesController::index'], null, null, null, false, false, null]],
        '/send' => [[['_route' => 'send', '_controller' => 'App\\Controller\\MessagesController::send'], null, null, null, false, false, null]],
        '/received' => [[['_route' => 'received', '_controller' => 'App\\Controller\\MessagesController::received'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/mycars' => [[['_route' => 'app_mycars', '_controller' => 'App\\Controller\\UserController::mycar'], null, null, null, false, false, null]],
        '/user/mechanics' => [[['_route' => 'app_search_mechanics', '_controller' => 'App\\Controller\\UserController::mechanics'], null, null, null, false, false, null]],
        '/user/car/add' => [[['_route' => 'user_add_car', '_controller' => 'App\\Controller\\UserController::addcar'], null, null, null, false, false, null]],
        '/user/profile/edit' => [[['_route' => 'app_editprofile', '_controller' => 'App\\Controller\\UserController::editprofile'], null, null, null, false, false, null]],
        '/user/premium' => [[['_route' => 'premium', '_controller' => 'App\\Controller\\UserController::premium'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/read/([^/]++)(*:21)'
                .'|/delete/([^/]++)(*:44)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:82)'
                    .'|wdt/([^/]++)(*:101)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:147)'
                            .'|router(*:161)'
                            .'|exception(?'
                                .'|(*:181)'
                                .'|\\.css(*:194)'
                            .')'
                        .')'
                        .'|(*:204)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        21 => [[['_route' => 'read', '_controller' => 'App\\Controller\\MessagesController::read'], ['id'], null, null, false, true, null]],
        44 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\MessagesController::delete'], ['id'], null, null, false, true, null]],
        82 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        101 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        147 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        161 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        194 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        204 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
