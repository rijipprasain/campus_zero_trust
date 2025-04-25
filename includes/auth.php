<?php
session_start();
require_once 'db.php'; // Database connection

function authenticate($email, $password, $pdo) {
    // Fetch user from database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify MD5 hash
    if ($user && $user['password_hash'] === md5($password)) {
        $_SESSION['user'] = $user;
        return true;
    }
    return false;
}

function checkAccess() {
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit;
    }
}

function logout() {
    session_destroy();
    header("Location: login.php");
    exit;
}
?>