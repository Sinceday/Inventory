<?php

include 'includes/connect.php';
include 'includes/sidebar.php';

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


$id = $_GET["id"];

// Select data associated with this particular id
$result = mysqli_query($connection, "SELECT * FROM categories WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
?>


<html>
    <div class="main">
      <div class="container mt-5">
        <h1>Product Category</h1>
        <div class="row" style="margin: 40px;">
          <div class="col-md-6">
            <h2>Edit Category</h2>
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>
                    <form action="edit_action.php" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control" id="categoryName" name="categoryName" value ="<?php echo $name; ?>">
                      </div>
                      <div class="mb-3"></div>
                      <input type="hidden" name="id" value=<?php echo $id; ?>>
                      <button type="submit"  name="update" value="Update" class="btn btn-primary">Edit Category</button>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

</html>


