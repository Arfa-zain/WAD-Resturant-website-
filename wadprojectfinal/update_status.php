<?php
include "restaurant.php";

$id = $_GET['id'];
$status = $_GET['status'];

$conn->query("UPDATE reservations SET status='$status' WHERE id=$id");

header("Location: reservations.php");
?>