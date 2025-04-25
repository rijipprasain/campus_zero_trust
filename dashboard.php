<?php
require 'includes/auth.php';
checkAccess();
include 'includes/nav.php';
?>

<div class="container">
    <?php include "roles/{$_SESSION['user']['role']}.php"; ?>
</div>