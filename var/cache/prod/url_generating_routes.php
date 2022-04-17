<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::Dashboard'], [], [['text', '/admin']], [], [], []],
    'app_admin_dashboard_index' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_client_area' => [[], ['_controller' => 'App\\Controller\\ClientAreaController::index'], [], [['text', '/espace-client/mes-reservations']], [], [], []],
    'reservation_delete' => [['id'], ['_controller' => 'App\\Controller\\ClientAreaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/espace-client/reservation/supprimer']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_hotel' => [[], ['_controller' => 'App\\Controller\\HotelController::index'], [], [['text', '/nos-hotels']], [], [], []],
    'app_hotel_rooms' => [['id'], ['_controller' => 'App\\Controller\\HotelRoomsController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/nos-suites']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], [], []],
    'app_reservation' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation']], [], [], []],
    'app_reservation_confirm' => [[], ['_controller' => 'App\\Controller\\ReservationController::confirm'], [], [['text', '/reservation/confirmation']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/verifier-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'app_user_info' => [[], ['_controller' => 'App\\Controller\\UserInfoController::index'], [], [['text', '/espace-client/mes-informations']], [], [], []],
];