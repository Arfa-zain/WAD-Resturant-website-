<?php
session_start();
include "restaurant.php";

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $_SESSION['admin'] = $user;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid login!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Spice Hub | admin login</title>
    <!--Favicon icon-->
    <link rel="icon" type="images/jpg" href="images/logo.jpg">

    <!-- GLOBAL CSS -->
    <link rel="stylesheet" href="home.css">

    <!-- LOGIN CSS -->
    <link rel="stylesheet" href="admin.css">
</head>

<body>

<?php include 'header.php'; ?>

<div class="login-box">
    <h2>Admin Login</h2>

    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button name="login">Login</button>
    </form>
</div>

<?php include 'footer.php'; ?>

<script src="main.js"></script>

</body>
</html>