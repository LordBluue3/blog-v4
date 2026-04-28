<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/blog', 'Blog::index');
$routes->get('/blog/(:segment)', 'Blog::view/$1');
$routes->get('/projects', 'Projects::index');
$routes->get('/projects/(:segment)', 'Projects::view/$1');

