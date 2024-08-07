<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/contacts' => [
            [['_route' => 'app_contacts', '_controller' => 'App\\Controller\\ContactsController::index'], null, null, null, false, false, null],
            [['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactsController::contacts'], null, null, null, false, false, null],
        ],
        '/history' => [
            [['_route' => 'app_history', '_controller' => 'App\\Controller\\HistoryController::index'], null, null, null, false, false, null],
            [['_route' => 'history', '_controller' => 'App\\Controller\\HistoryController::history'], null, null, null, false, false, null],
        ],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/register' => [
            [['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
            [['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
        ],
        '/receive' => [[['_route' => 'receive', '_controller' => 'App\\Controller\\PaymentController::receive'], null, null, null, false, false, null]],
        '/pay' => [[['_route' => 'pay', '_controller' => 'App\\Controller\\PaymentController::pay'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Security\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Security\\SecurityController::logout'], null, null, null, false, false, null]],
        '/settings' => [[['_route' => 'app_settings', '_controller' => 'App\\Controller\\SettingsController::index'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api_index', '_controller' => 'App\\Security\\APIController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/settings/api\\-key/delete/([^/]++)(*:76)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        76 => [
            [['_route' => 'settings_api_keys_delete', '_controller' => 'App\\Controller\\SettingsController::deleteApiKey'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
