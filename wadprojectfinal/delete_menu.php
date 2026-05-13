<?php
include 'restaurant.php';

$id = $_GET['id'] ?? 0;

if($id){
    $sql = "DELETE FROM menu_items WHERE id=$id";

    if($conn->query($sql)){
        header("Location: menu_admin.php");
        exit();
    } else {
        echo "Error deleting: " . $conn->error;
    }
} else {
    echo "Invalid ID";
}
?>