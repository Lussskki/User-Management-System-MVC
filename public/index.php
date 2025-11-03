<?php
require_once __DIR__ . '/../Router.php';
require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../controllers/UserController.php';

$router = new Router();
$userController = new UserController();

$router->get('/', function() {
    require __DIR__ . '/../views/home.php';
});

$router->get('/register', function() {
    require __DIR__ . '/../views/register.php';
});
$router->post('/register', [$userController, 'registerSubmit']);

$router->get('/users', [$userController, 'index']);
$router->get('/one/:id', [$userController, 'one']);

$router->get('/edit/:id', [$userController, 'edit']); 
$router->post('/update/:id', [$userController, 'update']); 


$router->resolve();
?>
