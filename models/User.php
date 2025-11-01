<?php
require_once __DIR__ . '/../Database.php';

class User {
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->pdo;
    }

    public function create($name, $email, $password) {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, email, password_hash) VALUES (?, ?, ?)");
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt->execute([$name, $email, $hash]);
        return true;
    }
}
?>
