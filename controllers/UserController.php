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
                  <a href='/User-Management-System-MVC/public/'>⬅️ Back to Home</a>";
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

    public function one($id = null) {
        if ($id) {
            $user_model = new User();
            $one = $user_model->findById($id);    

            require __DIR__ . '/../views/one_user.php';
        } else {
            echo "No user ID provided.";
        }
    }

    public function edit($id = null) {
        if (!$id) {
            echo "<h3>⚠️ No user ID provided.</h3>";
            return;
        }

        $user_model = new User();
        $user = $user_model->findById($id);

        if ($user) {
            require __DIR__ . '/../views/update_user.php';
        } else {
            echo "<h3>⚠️ User not found.</h3>";
        }
    }

     public function update($id = null) {
        if (!$id) {
            echo "<h3>⚠️ No user ID provided.</h3>";
            return;
        }

        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        $user_model = new User();
        $success = $user_model->update($id, $name, $email, $password);

        if ($success) {
            echo "<h3>✅ User updated successfully!</h3>
                  <a href='/User-Management-System-MVC/public/users'>⬅️ Back to List</a>";
        } else {
            echo "<h3>❌ Update failed.</h3>";
        }
    }


}
?>
