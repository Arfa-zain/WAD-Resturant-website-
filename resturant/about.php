
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spice Hub | About</title>
    <!--Favicon icon-->
    <link rel="icon" type="images/jpg" href="images/logo.jpg">
    <!--CSS linking-->
    <link rel="stylesheet" href="aboutcss.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <!--<script id="fix-darkmode">
    if (localStorage.getItem("theme") === "dark") {
        document.documentElement.classList.add("dark-mode");
    }
</script>-->
</head>

<body>

<?php
include 'header.php';

?>
<!-- ================= STORY ================= -->
<section class="story">
    <h1>About Us</h1>
    <p class="subtitle">Where taste meets passion</p>

    <div class="story-content">
        <img src="images/R.jpg" alt="Kitchen">

        <div class="story-text">
            <h2>Welcome to <strong>Spice Hub</strong></h2>

            <p>
                At <strong>Spice Hub</strong>, we believe that food is more than just a meal  it’s an experience. 
                Our goal is to bring people together through rich flavors, quality ingredients, and exceptional service.
            </p>

            <p>
                This project was created with passion and dedication, combining creativity with modern web design. 
                Every section of this website reflects teamwork, effort, and attention to detail.
            </p>

            <p>
                Whether you're exploring our menu or learning about our team, we aim to deliver a smooth and engaging experience.
            </p>
        </div>
    </div>
</section>

<!-- ================= VALUES ================= -->
<section class="values-section">
    <h1>Our Values</h1>
    <p class="subtitle">What makes us different</p>

    <div class="values-container">

        <div class="value-card">
            <div class="icon">🔥</div>
            <h2>Passion</h2>
            <p>We put our heart into every part of this project.</p>
        </div>

        <div class="value-card">
            <div class="icon">⭐</div>
            <h2>Quality</h2>
            <p>We focus on clean design and user-friendly experience.</p>
        </div>

        <div class="value-card">
            <div class="icon">🤝</div>
            <h2>Teamwork</h2>
            <p>We worked together to build and improve every feature.</p>
        </div>

    </div>
</section>

<!-- ================= TEAM ================= -->
<section class="team">
    <h1>Meet Our Team</h1>
    <p class="subtitle">The people behind this project</p>

    <div class="team-container">

        <!-- CARD 1 -->
        
<div class="card" onclick="openCV('images/MaryamCV.jpg')">
    <div class="img-box">
        <img src="images/profile.png" alt="Maryam">
    </div>
    <h2>Maryam Uzair</h2>
    <h4>Frontend & Backend Developer</h4>
    <p>Created the Home Page with complete frontend and backend work.</p>
</div>

        <!-- CARD 2 -->
<div class="card" onclick="openCV('images/AimenCV.jpg')">
    <div class="img-box">
        <img src="images/profile.png" alt="Aimen">
    </div>
    <h2>Aimen Haque</h2>
    <h4>Frontend & Backend Developer</h4>
    <p>Created the Menu Page with complete frontend and backend work.</p>
</div>

<!-- CARD 3 -->
<div class="card" onclick="openCV('images/EmanCV.jpg')">
    <div class="img-box">
        <img src="images/profile.png" alt="Eman">
    </div>
    <h2>Eman Aleem</h2>
    <h4>Frontend & Backend Developer</h4>
    <p>Created the About Us Page with complete frontend and backend work.</p>
</div>

<!-- CARD 4 -->
<div class="card" onclick="openCV('images/ArfaCV.jpg')">
    <div class="img-box">
        <img src="images/profile.png" alt="Arfa">
    </div>
    <h2>Arfa Zain</h2>
    <h4>Frontend & Backend Developer</h4>
    <p>Created the Contact Page with complete frontend and backend work.</p>
</div>
    </div>
</section>

<!-- ================= CV MODAL ================= -->
<div id="cvModal" class="cv-modal">
    <span class="cv-close" onclick="closeCV()">×</span>
    <img id="cvImage" src="" alt="CV">
</div>

<?php include 'footer.php'; ?>

<script src="aboutjs.js"></script>
<script src="main.js"></script>
</body>
</html>