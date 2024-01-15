<?php
namespace Modules\Profiles\Config;


// Create a new instance of our RouteCollection class.
$routes = \Config\Services::routes();


// Front routes
$routes->group('profile', ['namespace' => '\Modules\Profiles\Front\Controllers'], function($routes){
    $routes->get('/', 'Profiles::index');
    $routes->post('update', 'Profiles::doUpdate');
    $routes->post('uploadAvatar', 'Profiles::uploadAvatar');
});