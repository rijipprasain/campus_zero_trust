<?php
require 'includes/db.php';
require 'includes/auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (authenticate($email, $password, $pdo)) {
        header("Location: verify.php");
        exit;
    } else {
        echo "Invalid credentials";
    }
}
?>