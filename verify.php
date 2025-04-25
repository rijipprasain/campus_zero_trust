<?php
session_start();
require 'includes/db.php';
require 'includes/security.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $device = $_POST['device'];
    $country = $_POST['country'];
    
    if (verifyDevice($_SESSION['user'], $device) && 
        verifyLocation($_SESSION['user'], $country)) {
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Security check failed. Access denied.";
        // Log security incident
        header("Refresh: 3; url=logout.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Security Check</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container" style="text-align: center; margin-top: 100px;">
        <h3>Security Verification</h3>
        <form method="POST">
            <input type="text" name="device" placeholder="Your device name" required>
            <input type="text" name="country" placeholder="Your country" required>
            <button type="submit">Verify</button>
        </form>
    </div>
</body>
</html>