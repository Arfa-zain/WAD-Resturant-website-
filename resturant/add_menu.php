<?php
include "restaurant.php";

// FETCH CATEGORIES FOR DROPDOWN
$catResult = $conn->query("SELECT * FROM category");

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id']; // ✅ CHANGED
    $img = $_POST['image'];

    $sql = "INSERT INTO menu_items(name, description, price, image, category_id)
            VALUES('$name','$desc','$price','$img','$category_id')";

    if($conn->query($sql)){
        $msg = "Item Added Successfully!";
    } else {
        $msg = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Spice Hub | Add menu</title>
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
            margin-bottom: 20px;
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
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        .msg {
            text-align: center;
            margin-bottom: 10px;
            color: green;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Add Menu Item</h2>

    <?php if(isset($msg)) echo "<p class='msg'>$msg</p>"; ?>

    <form method="POST">

        <input name="name" placeholder="Name" required>
        <input name="desc" placeholder="Description" required>
        <input name="price" placeholder="Price" required>

        <!-- ✅ CATEGORY DROPDOWN -->
        <select name="category_id" required>
            <option value="">Select Category</option>
            <?php while($row = $catResult->fetch_assoc()) { ?>
                <option value="<?php echo $row['category_id']; ?>">
                    <?php echo $row['category_name']; ?>
                </option>
            <?php } ?>
        </select>

        <input name="image" placeholder="Image path" required>

        <button name="add">Add Item</button>
    </form>
</div>

</body>
</html>