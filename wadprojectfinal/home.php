
<?php
include 'restaurant.php';
include 'header.php';


if($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "FORM SUBMITTED<br>";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $rating = $_POST['rating'];

    echo "DATA RECEIVED<br>";

    $query = "INSERT INTO reviews (name, email, message, rating)
              VALUES ('$name', '$email', '$message', '$rating')";

    if(mysqli_query($conn, $query)){
        echo "INSERT SUCCESS";
    } else {
        echo "ERROR: " . mysqli_error($conn);
    }
}

$reviews = mysqli_query($conn, "SELECT * FROM reviews ORDER BY created_at DESC");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spice Hub | Home</title>
    <!--Favicon icon-->
    <link rel="icon" type="images/jpg" href="images/logo.jpg">

    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <!--Audio-->
<audio id="welcomeAudio" src="videos/Audio1.mp3"></audio>


<!-- HERO -->
<section class="hero">
    <video class="bg-video" autoplay muted loop playsinline>
        <source src="videos/resturant video.mp4" type="video/mp4">
    </video>


    <div class="overlay"></div>

    <div class="hero-content">
        <h1>Welcome to Spice Hub</h1>
        <p>Where culinary artistry meets exceptional dining</p>

        <div class="buttons">
    <button class="home-btn" onclick="window.location.href='menu.php'">View Menu</button>
    <button class="home-btn" onclick="window.location.href='contact.php'">Reserve Table</button>
    <button class="home-btn audio-btn" onclick="playAudio()">▶ Welcome Audio</button>
    <button class="home-btn" onclick="window.location.href='login.php'">
Admin Panel
</button>
</div>
    </div>
</section>

<!-- FEATURES -->
<section class="features" id="about">
    <div class="feature-box">
        <div class="icon">👨‍🍳</div>
        <h3>Expert Chefs</h3>
        <p>Our talented team brings years of culinary expertise</p>
    </div>

    <div class="feature-box">
        <div class="icon">⭐</div>
        <h3>Premium Quality</h3>
        <p>Only the finest ingredients make it to your plate</p>
    </div>

    <div class="feature-box">
        <div class="icon">⏰</div>
        <h3>Open Daily</h3>
        <p>Serving lunch and dinner seven days a week</p>
    </div>
</section>

<!-- FEATURED -->
<section class="featured">
    <h2>Featured Dishes</h2>
    <p>Discover our most popular creations, crafted with passion and precision</p>
</section>

<!-- MENU PREVIEW -->
<section class="menu">
    <div class="card">
        <img src="images/bariyani.jpeg">
        <div class="content">
            <h3>Karachi Biryani <span>Rs42</span></h3>
            <p>Spicy, aromatic delight</p>
        </div>
    </div>

    <div class="card">
        <img src="images/burger.jpeg">
        <div class="content">
            <h3>Grilled Burger <span>Rs36</span></h3>
            <p>Juicy and flavorful</p>
        </div>
    </div>

    <div class="card">
        <img src="images/bbq.jpeg">
        <div class="content">
            <h3>BBQ Platter <span>Rs28</span></h3>
            <p>Smoky grilled perfection</p>
        </div>
    </div>
</section>
<!--reviews-->
<section class="reviews">
    <h1>What Our Customers Say</h1>
    <p class="subtitle">Loved by food lovers every day</p>

    <div class="slider">

        <button class="prev" onclick="prevSlide()">❮</button>

        <div class="review-container" id="reviewContainer">

            <?php while($row = mysqli_fetch_assoc($reviews)) { ?>
                <div class="review-card">
                    <div class="stars">
                        <?php echo str_repeat("⭐", $row['rating']); ?>
                    </div>
                    <p>"<?php echo $row['message']; ?>"</p>
                    <h3>- <?php echo $row['name']; ?></h3>
                </div>
            <?php } ?>

        </div>

        <button class="next" onclick="nextSlide()">❯</button>

    </div>

 
    <button class="review-btn" onclick="openForm()">Leave a Review</button>
</section>


<!-- Modal -->
<div id="reviewModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeForm()">&times;</span>

        <h2>Leave a Review</h2>

        <form id="reviewForm" method="POST" action="home.php">
            <input type="text" name="name" placeholder="Your Name" required>

            <input type="email" name="email" placeholder="Your Email" required>

            <label>Rating:</label>
            <!--previous rating
            <select required>
                <option value="">Select Rating</option>
                <option>⭐</option>
                <option>⭐⭐</option>
                <option>⭐⭐⭐</option>
                <option>⭐⭐⭐⭐</option>
                <option>⭐⭐⭐⭐⭐</option>
            </select> -->
            <div class="rating">
    <span data-value="1">★</span>
    <span data-value="2">★</span>
    <span data-value="3">★</span>
    <span data-value="4">★</span>
    <span data-value="5">★</span>
</div>

<input type="hidden" id="ratingValue" name="rating" value="0">

            <textarea  name="message" placeholder="Write your review..." required></textarea>

            <button type="submit" name="submit_review">Submit</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>


<script src="home.js"></script>
<script src="main.js"></script>
</body>
</html>