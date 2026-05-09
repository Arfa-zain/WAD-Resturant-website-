<?php
include 'restaurant.php';

$search = $_GET['search'] ?? '';

$sql = "SELECT menu_items.*, category.category_name 
        FROM menu_items
        LEFT JOIN category 
        ON menu_items.category_id = category.category_id
        WHERE menu_items.name LIKE '%$search%' 
        OR category.category_name LIKE '%$search%'";

$result = $conn->query($sql);

if (!$result) {
    die("Query Failed: " . $conn->error);
}
?>
<title>Spice Hub | Menu Management</title>
    <!--Favicon icon-->
    <link rel="icon" type="images/jpg" href="images/logo.jpg">
<link rel="stylesheet" href="menu.css">

<div class="container">
    <h2>Menu Management</h2>

    <!-- BACK TO DASHBOARD -->
    <div class="back-btn-container">
    <a href="dashboard.php" class="btn-back">← Back to Dashboard</a>
</div>

    <!-- SEARCH BAR -->
    <form method="GET" class="search-box">
        <input type="text" name="search" placeholder="Search menu..." value="<?php echo $search; ?>">
        <button type="submit">Search</button>
    </form>

    <a href="add_menu.php" class="btn btn-add">+ Add Menu</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <th>Action</th>
        </tr>

        <?php if($result->num_rows > 0){ ?>
            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description'] ?? 'No description'; ?></td>
                <td><?php echo $row['price']; ?></td>

                <!-- CATEGORY FROM JOIN -->
                <td><?php echo $row['category_name'] ?? 'Unassigned'; ?></td>

                <td>
                    <a href="edit_menu.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">Edit</a>

                    <a href="delete_menu.php?id=<?php echo $row['id']; ?>" 
                       class="btn btn-delete"
                       onclick="return confirm('Are you sure you want to delete?')">
                       Delete
                    </a>
                </td>
            </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="6">No menu items found</td>
            </tr>
        <?php } ?>
    </table>
</div>