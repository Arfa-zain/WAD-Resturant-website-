<?php
include 'header.php';

$conn = new mysqli("localhost", "root", "", "restaurant",3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spice Hub | Menu </title>
    <!--Favicon icon-->
    <link rel="icon" type="images/jpg" href="images/logo.jpg">

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>

<body>

<!-- ================= TOP CATEGORY TABS ================= -->
<div class="tabs">
    <button class="tab active" onclick="showCategory('appetizers', event)">Appetizers</button>
    <button class="tab" onclick="showCategory('main', event)">Main Courses</button>
    <button class="tab" onclick="showCategory('drinks', event)">Beverages</button>
    <button class="tab" onclick="showCategory('desserts', event)">Desserts</button>
</div>

<h2 class="section-title">Our Menu</h2>

<!-- ===================================================== -->
<!-- ================= APPETIZERS ======================== -->
<!-- ===================================================== -->
<div id="appetizers" class="menu-section active-section">
<div class="card-container">

<?php
$sql = "SELECT m.* 
        FROM menu_items m
        JOIN category c ON m.category_id = c.category_id
        WHERE c.category_name = 'Appetizers'";


$result = $conn->query($sql);

if($result && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>
    <div class="card">
        <img src="<?php echo !empty($row['image']) ? $row['image'] : 'images/default.jpg'; ?>" alt="food image">
        <div class="card-content">
            <h3><?php echo $row['name']; ?></h3>
            <p><?php echo $row['description']; ?></p>
            <span>Rs. <?php echo $row['price']; ?></span>
        </div>
    </div>
<?php }} ?>

</div>
</div>

<!-- ===================================================== -->
<!-- ================= MAIN COURSE ======================= -->
<!-- ===================================================== -->
<div id="main" class="menu-section">

<?php
// MAIN PARENT CATEGORIES (Desi, Chinese, Fast Food, Side Dishes)
$subCats = $conn->query("
    SELECT * FROM category 
    WHERE parent_id = (
        SELECT category_id FROM category WHERE category_name='Main Course'
    )
");


while($sub = $subCats->fetch_assoc()) {

    echo "<h2 class='sub-heading'>{$sub['category_name']}</h2>";
    echo "<div class='card-container'>";

    $catId = $sub['category_id'];

    $items = $conn->query("
        SELECT * FROM menu_items 
        WHERE category_id = $catId
    ");

    if($items && $items->num_rows > 0){
        while($row = $items->fetch_assoc()){
?>
            <div class="card">
                <img src="<?php echo !empty($row['image']) ? $row['image'] : 'images/default.jpg'; ?>" alt="food image">
                <div class="card-content">
                    <h3><?php echo $row['name']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                    <span>Rs. <?php echo $row['price']; ?></span>
                </div>
            </div>
<?php
        }
    }

    echo "</div>";
}
?>

</div>

<!-- ===================================================== -->
<!-- ================= DRINKS ============================ -->
<!-- ===================================================== -->
<div id="drinks" class="menu-section">
<div class="card-container">

<?php
$sql = "SELECT m.* 
        FROM menu_items m
        JOIN category c ON m.category_id = c.category_id
        WHERE c.category_name = 'Beverages'";


$result = $conn->query($sql);

if($result){
    while($row = $result->fetch_assoc()){
?>
    <div class="card">
        <img src="<?php echo !empty($row['image']) ? $row['image'] : 'images/default.jpg'; ?>" alt="food image">
        <div class="card-content">
            <h3><?php echo $row['name']; ?></h3>
            <p><?php echo $row['description']; ?></p>
            <span>Rs. <?php echo $row['price']; ?></span>
        </div>
    </div>
<?php }} ?>

</div>
</div>

<!-- ===================================================== -->
<!-- ================= DESSERTS ========================== -->
<!-- ===================================================== -->
<div id="desserts" class="menu-section">
<div class="card-container">

<?php
$sql = "SELECT m.* 
        FROM menu_items m
        JOIN category c ON m.category_id = c.category_id
        WHERE c.category_name = 'Desserts'";


$result = $conn->query($sql);

if($result && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>
    <div class="card">
       <img src="<?php echo !empty($row['image']) ? $row['image'] : 'images/default.jpg'; ?>" alt="food image">
        <div class="card-content">
            <h3><?php echo $row['name']; ?></h3>
            <p><?php echo $row['description']; ?></p>
            <span>Rs. <?php echo $row['price']; ?></span>
        </div>
    </div>
<?php }} ?>

</div>
</div>

<?php include 'footer.php'; ?>

<script src="script.js"></script>
<script src="main.js"></script>

</body>
</html>

<?php $conn->close(); ?>