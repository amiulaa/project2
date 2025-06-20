<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// @phpstan-ignore-next-line
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->set404Override(function() {
    echo view('errors/not_found');
});


