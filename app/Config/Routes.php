<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test-db', function() {
    $db = \Config\Database::connect();
    $query = $db->query('SELECT version()');
    $result = $query->getResult();
    print_r($result);
});

$routes->get('/Testing', 'Testing::index');