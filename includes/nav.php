<nav class="navbar">
    <div>Campus Portal</div>
    <div>
        <?= $_SESSION['user']['full_name'] ?> (<?= ucfirst($_SESSION['user']['role']) ?>)
        <a href="logout.php" style="color: white; margin-left: 15px;">Logout</a>
    </div>
</nav>