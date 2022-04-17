<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [
            [['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::Dashboard'], null, null, null, false, false, null],
            [['_route' => 'app_admin_dashboard_index', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
        ],
        '/espace-client/mes-reservations' => [[['_route' => 'app_client_area', '_controller' => 'App\\Controller\\ClientAreaController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/nos-hotels' => [[['_route' => 'app_hotel', '_controller' => 'App\\Controller\\HotelController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/reservation/confirmation' => [[['_route' => 'app_reservation_confirm', '_controller' => 'App\\Controller\\ReservationController::confirm'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/verifier-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/espace-client/mes-informations' => [[['_route' => 'app_user_info', '_controller' => 'App\\Controller\\UserInfoController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/espace\\-client/reservation/supprimer/([^/]++)(*:53)'
                .'|/nos\\-suites/([^/]++)(*:81)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:124)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        53 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ClientAreaController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        81 => [[['_route' => 'app_hotel_rooms', '_controller' => 'App\\Controller\\HotelRoomsController::index'], ['id'], null, null, false, true, null]],
        124 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
