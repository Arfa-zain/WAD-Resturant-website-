<?php
include "restaurant.php";

$result = $conn->query("SELECT * FROM reviews");
?>
<title>Spice Hub | reviews</title>
    <!--Favicon icon-->
    <link rel="icon" type="images/jpg" href="images/logo.jpg">
<link rel="stylesheet" href="review.css">

<h2 style="text-align: center;">Customer Reviews</h2>
<!-- BACK TO DASHBOARD -->
    <div class="back-btn-container">
    <a href="dashboard.php" class="btn-back">← Back to Dashboard</a>
</div>

<?php while($row = $result->fetch_assoc()){ ?>


<div class="review-box" style="border:1px solid #ccc; margin:10px; padding:10px;">
    <h4><?php echo $row['name']; ?> ⭐ <?php echo $row['rating']; ?></h4>
    <p><?php echo $row['message']; ?></p>

</div>


<?php } ?>