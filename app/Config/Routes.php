<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//info routes
$routes->get('/information', 'InfoController::index');
$routes->get('/information/create', 'InfoController::createInforamtion');
$routes->post('/information/store', 'InfoController::storeInformation');
$routes->get('/information/edit/(:num)', 'InfoController::editInforamtion/$1');
$routes->post('information/update/(:num)', 'InfoController::updateInformation/$1');
$routes->get('/information/delete/(:num)', 'InfoController::deleteInforamtion/$1');