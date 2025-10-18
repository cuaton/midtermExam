<?php

use CodeIgniter\Router\RouteCollection;

$routes = $routes ?? new RouteCollection();

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// Authentication routes
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');

// Announcements routes
$routes->get('/announcements', 'Announcement::index');

// Teacher routes
$routes->get('/teacher/dashboard', 'Teacher::dashboard');

// Admin routes
$routes->get('/admin/dashboard', 'Admin::dashboard');

// Apply RoleAuth filter to protected routes
$routes->group('admin', ['filter' => 'RoleAuth'], function($routes) {
    $routes->get('dashboard', 'Admin::dashboard');
});

$routes->group('teacher', ['filter' => 'RoleAuth'], function($routes) {
    $routes->get('dashboard', 'Teacher::dashboard');
});
