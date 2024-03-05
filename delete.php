<?php
include 'includes/connect.php';

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


if (isset($_GET['id'])) {
  $id = $_GET['id'];
  mysqli_query($connection, "DELETE FROM categories WHERE id=$id");
  header('location: index.php');
}

header("Location: categories.php");
exit();