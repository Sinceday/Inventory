<?php
include 'includes/connect.php';
include 'includes/sidebar.php';
?>
<div class="main">
  <div class="container mt-5">
    <h1>Product Category</h1>
    <div class="row" style="margin: 40px;">
      <div class="col-md-6">
        <h2>Add New Category</h2>
        <table class="table table-bordered">
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
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <h2>All Categories</h2>
        <table class="table table-bordered">
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
                echo "<a href=\"edit_category.php?id=$row[id]\" class='btn btn-primary'>Edit</a>&nbsp;  ";
                echo "<a href=\"delete.php?id=$row[id]\" class='btn btn-danger ml-2'>Delete</a>";
                echo "</td>";
                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='3'>No categories found</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

