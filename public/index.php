<?php
require_once __DIR__ . '/../Router.php';
require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../controllers/UserController.php';

$router = new Router();
$userController = new UserController();

$router->get('/', function() {
    return '<h1>Welcome to User Management System</h1>
            <a href="/user-managment-system/public/register">Go to Register</a>';
});

$router->get('/register', function() {
    require __DIR__ . '/../views/register.php';
});
$router->post('/register', [$userController, 'registerSubmit']);
$router->get('/users', [$userController, 'index']);

$router->resolve();
?>
