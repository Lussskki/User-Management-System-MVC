<?php
require_once __DIR__ . '/../models/User.php';

class UserController {
    public function registerForm() {
        require __DIR__ . '/../views/register.php';
    }

    public function registerSubmit() {
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if (!$name || !$email || !$password) {
            echo "<h3>⚠️ All fields are required!</h3>";
            return;
        }

        $user = new User();
        try {
            $user->create($name, $email, $password);
            echo "<h3>✅ Registration successful!</h3>
                  <a href='/User-Management-System-MVC/public/'>Back to Home</a>";
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                echo "<h3>⚠️ Email already exists!</h3>";
            } else {
                echo "<h3>❌ Database error: {$e->getMessage()}</h3>";
            }
        }
    }

    public function index() {
        $user = new User();
        $users = $user->all();
        require __DIR__ . '/../views/read.php';
    }
}
?>
