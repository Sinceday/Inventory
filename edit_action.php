<?php

include 'includes/connect.php';

if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}



  if (isset($_POST['update'])) {
    // Escape special characters in a string for use in an SQL statement
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $name = mysqli_real_escape_string($connection, $_POST['categoryName']);
    
    // Check for empty fields
    if (empty($name)) {
      if (empty($name)) {
        echo "<font color='red'>Name field is empty.</font><br/>";
      }
    } else {
      // Update the database table
      $result = mysqli_query($connection, "UPDATE categories SET `name` = '$name' WHERE `id` = $id");
      
      $connection->close();

      header("Location: categories.php");
      exit();
    }
  }
?>