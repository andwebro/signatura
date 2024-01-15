<?php
namespace Modules\ctr_templates\Config;


// Create a new instance of our RouteCollection class.
$routes = \Config\Services::routes();

$routes->group('admin/ctr_templates', ['namespace' => '\Modules\Ctr_templates\Admin\Controllers'], function($routes){
    $routes->get('/', 'Ctr_templates::index');
    $routes->get('list', 'Ctr_templates::getList');

    $routes->get('form', 'Ctr_templates::form_ajax/');
    $routes->get('form/(:any)', 'Ctr_templates::form_ajax/$1');

    $routes->get('delete/(:any)', 'Ctr_templates::delete/$1');
    $routes->get('toggle/(:any)/(:num)', 'Ctr_templates::toggleField/$1/$2');

    $routes->post('search', 'Ctr_templates::postSearch');
    $routes->post('update', 'Ctr_templates::update');
});

// Front routes
$routes->group('templates', ['namespace' => '\Modules\Ctr_templates\Front\Controllers'], function($routes){
    $routes->get('/', 'Ctr_templates::index');
    $routes->get('new', 'Ctr_templates::form_act');
    $routes->post('save', 'Ctr_templates::save_template');
    $routes->get('(:any)', 'Ctr_templates::form_act/$1');
});

// API routes
$routes->group('api/contracts', ['namespace' => '\Modules\Ctr_templates\Api'], function($routes){
    $routes->get('list', 'Ctr_templates::listContracts');
});

