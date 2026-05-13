<?php
include 'restaurant.php';

$id = $_GET['id'] ?? 0;

// Fetch menu item
$result = $conn->query("SELECT * FROM menu_items WHERE id=$id");
$row = $result->fetch_assoc();

// Fetch categories
$catResult = $conn->query("SELECT * FROM category");

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $img = $_POST['image'];

    $sql = "UPDATE menu_items SET 
            name='$name',
            description='$desc',
            price='$price',
            category_id='$category_id',
            image='$img'
            WHERE id=$id";

    if($conn->query($sql)){
        header("Location: menu_admin.php");
        exit();
    } else {
        echo "Error updating: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Spice Hub | Edit menu</title>
    <!--Favicon icon-->
    <link rel="icon" type="images/jpg" href="images/logo.jpg">

    <style>
        body {
            font-family: Arial;
            background: #f4f6f9;
        }

        .container {
            width: 400px;
            margin: 60px auto;
            background: white;
            padding: 30px 35px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #218838;
        }

        .back {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;

        }
        /* Back to dashboard button */
.back-btn-container{
    margin-bottom: 15px;
}

.btn-back{
    display: inline-block;
    background-color: #2c5364;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 6px;
    font-weight: 500;
    transition: all 0.3s ease;
}

/* Hover effect */
.btn-back:hover{
    background-color: #e66700;
    transform: translateY(-2px);
    box-shadow: 0 3px 8px rgba(0,0,0,0.2);
}
    </style>
</head>

<body>

<div class="container">

    <!-- BACK TO menu managment -->
    <div class="back-btn-container">
    <a href="menu_admin.php" class="btn-back">← Back to Menu Management</a>
</div>
    <h2>Edit Menu Item</h2>

    <form method="POST">

        <input name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>

        <input name="desc" value="<?php echo htmlspecialchars($row['description']); ?>" required>

        <input name="price" value="<?php echo $row['price']; ?>" required>

        <!-- CATEGORY DROPDOWN -->
        <select name="category_id" required>
            <?php while($c = $catResult->fetch_assoc()) { ?>
                <option value="<?php echo $c['category_id']; ?>"
                    <?php if($row['category_id'] == $c['category_id']) echo "selected"; ?>>
                    <?php echo $c['category_name']; ?>
                </option>
            <?php } ?>
        </select>

        <input name="image" value="<?php echo htmlspecialchars($row['image']); ?>" required>

        <button name="update">Update Item</button>
    </form>
</div>

</body>
</html>