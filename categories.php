<?php
include 'includes/connect.php';
include 'includes/sidebar.php';
?>
<div class="main">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <h1>Product Categories</h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Add New Category</th>
              <th>All Categories</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <form action="add_category.php" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Enter category name">
                  </div>
                  <div class="mb-3"></div>
                  <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
              </td>
              <td>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Categories</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM categories";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>";
                        echo "<button class='btn btn-primary'>Edit</button>&nbsp;";
                        echo "<button class='btn btn-danger ml-2'>Delete</button>";
                        echo "</td>";
                        echo "</tr>";
                      }
                    } else {
                      echo "<tr><td colspan='3'>No categories found</td></tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>