<?php
require_once __DIR__ . '/../Router.php';
require_once __DIR__ . '/../Database.php';

$router = new Router();

$router->get('/', function() {
    return '<h1>Welcome to User Management System</h1>';
});

$router->get('/register', function() {
    require '../views/register.php';
});

$router->resolve();
?>
