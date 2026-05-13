<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
    <link rel="icon" type="images/jpg" href="images/logo.jpg">

<!-- NAVBAR -->
<header class="navbar">
    <div class="logo">
    <img src="images/logo.jpg" alt="logo">
    <span>Spice Hub</span>
</div>

    <nav>
        <ul class="nav-links">
            <li>
  <a href="home.php" class="<?= $currentPage == 'home.php' ? 'active' : '' ?>">
    Home
  </a>
</li>

<li>
  <a href="menu.php" class="<?= $currentPage == 'menu.php' ? 'active' : '' ?>">
    Menu
  </a>
</li>
<li>
  <a href="about.php" class="<?= $currentPage == 'about.php' ? 'active' : '' ?>">
    About
  </a>
</li>

<li>
  <a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>">
    Contact
  </a>
</li>
            <li><a href="login.php">Admin Login</a></li>
        </ul>
    </nav>

    <button id="modeToggle" class="mode-btn">🌙</button>
</header>