<?php
require_once __DIR__ . '/../Router.php';
require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../controllers/UserController.php';

$router = new Router();
$userController = new UserController();

$router->get('/', function() {
    return '
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>User Management System</title>
      <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            width: 400px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            color: #222;
            margin-bottom: 20px;
        }
        a {
            display: inline-block;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 6px;
            transition: background-color 0.2s;
        }
        a:hover {
            background-color: #0056b3;
        }
      </style>
    </head>
    <body>
      <div class="container">
        <h1>Welcome to User Management System</h1>
        <a href="/User-Management-System-MVC/public/register">Go to Register</a>
      </div>
    </body>
    </html>';
});


$router->get('/register', function() {
    require __DIR__ . '/../views/register.php';
});
$router->post('/register', [$userController, 'registerSubmit']);
$router->get('/users', [$userController, 'index']);
$router->get('/one/:id', [$userController, 'one']);

$router->resolve();
?>
