<?php
session_start();
?>

<nav>
    <img src="asset/logo.png" class="logo">
    <ul>
        <li><a href="home.html">Beranda</a></li>
        <li><a href="belajar.html">Belajar</a></li>
        <li><a href="web.html">Kuis</a></li>
        <li><a href="kalkulator.html">Kalkulator</a></li>
    </ul>
    <div class="user-info" style="background:linear-gradient(15deg, #56019D, #7A3AA6, #BF82CF );border-radius: 0 0 30px 30px; padding: 8px 20px; color:white;">
        <?php if (isset($_SESSION['firstName'])): ?>
            <span><?php echo $_SESSION['firstName']; ?></span>
        <?php endif; ?>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</nav>
