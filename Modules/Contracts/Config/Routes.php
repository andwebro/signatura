<?php
namespace Modules\Contracts\Config;


// Create a new instance of our RouteCollection class.
$routes = \Config\Services::routes();

$routes->group('admin/contracts', ['namespace' => '\Modules\Contracts\Admin\Controllers'], function($routes){
    $routes->get('/', 'Contracts::index');
    $routes->get('list', 'Contracts::getList');

    $routes->get('form', 'Contracts::form_ajax/');
    $routes->get('form/(:any)', 'Contracts::form_ajax/$1');

    $routes->get('delete/(:any)', 'Contracts::delete/$1');
    $routes->get('toggle/(:any)/(:num)', 'Contracts::toggleField/$1/$2');

    $routes->post('search', 'Contracts::postSearch');
    $routes->post('update', 'Contracts::update');
});

// Front routes
$routes->group('contracts', ['namespace' => '\Modules\Contracts\Front\Controllers'], function($routes){
    $routes->get('/', 'Contracts::index');
    $routes->get('sign/(:any)', 'Contracts::signContract/$1');
    $routes->get('signed/(:any)', 'Contracts::signContractSuccess/$1');
    $routes->post('do_sign', 'Contracts::doSignContract');
    $routes->get('get_pdf/(:any)', 'Contracts::getPDF/$1');
    $routes->get('(:any)', 'Contracts::details/$1');
});

// API routes
$routes->group('api/contracts', ['namespace' => '\Modules\Contracts\Api'], function($routes){
    $routes->post('create', 'Contracts::createContract');
});

