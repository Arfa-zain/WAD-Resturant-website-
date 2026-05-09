<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>

<?php include 'header.php'; ?>
<title>Spice Hub | dashboard</title>
    <!--Favicon icon-->
    <link rel="icon" type="images/jpg" href="images/logo.jpg">
<link rel="stylesheet" href="dashboard.css">
<div class="dashboard">

    <h1>Admin Dashboard</h1>
    <p>Welcome, <?php echo $_SESSION['admin']; ?> 👋</p>

    <div class="card-container">

        <a class="card" href="menu_admin.php">
            🍽 Manage Menu
        </a>

        <a class="card" href="reservations.php">
            📅 Reservations
        </a>

        <a class="card" href="reviews.php">
            ⭐ Reviews
        </a>

        <a class="card" href="logout.php">
            🚪 Logout
        </a>

    </div>

</div>

<?php include 'footer.php'; ?>
<script src="main.js"></script>