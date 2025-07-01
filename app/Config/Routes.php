<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('api/signup', 'Auth::signup');
$routes->post('api/login', 'Auth::login');
$routes->post('api/payment', 'Payment::create');
$routes->get('api/get-users', 'UserApi::index');
$routes->get('homepage', 'Pages::homepage');
$routes->get('login', 'Pages::login');
$routes->get('payment', 'Pages::payment');
$routes->get('product-page', 'Pages::productPage');
$routes->get('signup', 'Pages::signup');
$routes->get('admin', 'Pages::admin');
$routes->get('training-page', 'Pages::trainingPage');
$routes->post('api/update-tier', 'UserApi::updateTier');
$routes->post('api/update-status-bulk', 'UserApi::updateStatusBulk');
