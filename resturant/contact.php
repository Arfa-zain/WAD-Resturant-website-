
<?php
include 'restaurant.php';

$currentPage = basename($_SERVER['PHP_SELF']);

if (isset($_POST['submitBtn'])) {

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $date = $_POST['date'] ?? '';
    $time = $_POST['time'] ?? '';
    $guests = $_POST['guests'] ?? '';
    $request = $_POST['request'] ?? '';

    $query = "INSERT INTO reservations
    (name, email, phone, date, time, guests, request)
    VALUES
    ('$name', '$email', '$phone', '$date', '$time', '$guests', '$request')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Reservation submitted successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpiceHub – Contact & Reservation</title>

    <link rel="icon" type="image/jpg" href="images/logo.jpg">
    <link rel="stylesheet" href="contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>

<header class="navbar">
    <div class="logo">
        <img src="images/logo.jpg" alt="logo">
        <span>Spice Hub</span>
    </div>

    <!-- nav-links directly inside navbar -->
    <ul class="nav-links">
        <li>
            <a href="home.php" class="<?= $currentPage == 'home.php' ? 'active' : '' ?>">Home</a>
        </li>
        <li>
            <a href="menu.php" class="<?= $currentPage == 'menu.php' ? 'active' : '' ?>">Menu</a>
        </li>
        <li>
            <a href="about.php" class="<?= $currentPage == 'about.php' ? 'active' : '' ?>">About</a>
        </li>
        <li>
            <a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>">Contact</a>
        </li>
        <li>
            <a href="login.php" class="<?= $currentPage == 'login.php' ? 'active' : '' ?>">Admin Login</a>
        </li>
    </ul>
</header>

<div class="hero">
    <h1>Contact Us</h1>
    <p>We'd love to hear from you. Reserve a table or contact us anytime.</p>
</div>

<div class="main-grid">

    <div class="info-panel">
        <h2>Get in Touch</h2>

        <div class="info-item">
            <div class="info-content">
                <strong>Address</strong>
                <p>123 Culinary Street<br>Foodie District, NY 10001</p>
            </div>
        </div>

        <div class="info-item">
            <div class="info-content">
                <strong>Phone</strong>
                <a href="tel:+923365667899">0336 5667899</a>
            </div>
        </div>

        <div class="info-item">
            <div class="info-content">
                <strong>Email</strong>
                <a href="mailto:info@SpiceHub.com">info@SpiceHub.com</a>
            </div>
        </div>

        <div class="info-item">
            <div class="info-content">
                <strong>Opening Hours</strong>
                <p>
                    Monday – Thursday: 11:00 AM – 10:00 PM<br>
                    Friday – Saturday: 11:00 AM – 11:00 PM<br>
                    Sunday: 10:00 AM – 9:00 PM
                </p>
            </div>
        </div>

        <div class="map-box">
            <iframe
                src="https://www.google.com/maps?q=Islamabad+Pakistan&output=embed"
                width="100%"
                height="250"
                style="border:0; border-radius:10px;"
                loading="lazy">
            </iframe>
        </div>
    </div>

    <form class="form-panel" method="POST">
        <h2>Make a Reservation</h2>

        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" id="fullName" placeholder="Enter your full name" required>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" placeholder="Enter email" required>
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="tel" name="phone" id="phone" placeholder="Phone number" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Date</label>
                <input type="date" name="date" required>
            </div>

            <div class="form-group">
                <label>Time</label>
                <input type="time" name="time" required>
            </div>
        </div>

        <div class="form-group">
            <label>Number of Guests</label>
            <select name="guests" required>
                <option value="">Select Guests</option>
                <option value="1">1 Guest</option>
                <option value="2">2 Guests</option>
                <option value="3">3 Guests</option>
                <option value="4">4 Guests</option>
                <option value="5">5 Guests</option>
                <option value="6">6 Guests</option>
            </select>
        </div>

        <div class="form-group">
            <label>Special Request</label>
            <textarea name="request" rows="5" placeholder="Special request"></textarea>
        </div>

        <button type="submit" name="submitBtn" class="btn-submit">
            Submit Reservation
        </button>
    </form>

</div>

<?php include 'footer.php'; ?>

<script src="contact.js"></script>
</body>
</html>
