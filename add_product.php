<?php
include 'includes/connect.php';

if (isset($_POST['add_product'])) {
    $product_title = mysqli_real_escape_string($connection, $_POST['product-title']);
    $product_category = mysqli_real_escape_string($connection, $_POST['product-category']);
    $product_photo = mysqli_real_escape_string($connection, $_POST['product-photo']);
    $product_quantity = intval($_POST['product-quantity']); //integer value
    $buying_price = floatval($_POST['buying-price']);
    $selling_price = floatval($_POST['selling-price']);

    // insert product
    $query = "INSERT INTO products (name, quantity, buy_price, sale_price, categories_id, media_id, date) VALUES (?, ?, ?, ?, (SELECT id FROM categories WHERE name = ? LIMIT 1), (SELECT id FROM media WHERE file_name = ? LIMIT 1), NOW())";

    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "siisss", $product_title, $product_quantity, $buying_price, $selling_price, $product_category, $product_photo);
    if (mysqli_stmt_execute($stmt)) {
        // need to fix this into modal
        echo "Product added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
    mysqli_stmt_close($stmt);
}
?>
<?php
include 'includes/sidebar.php';
?>

<div class="main">
    <div class="container mt-5">
        <div class="col-md-8">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>
                            <h2>Add New Product</h2>
                        </strong>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <form method="post" action="add_product.php" class="clearfix">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="lni lni-grid-alt"></i>
                                        </span>
                                        <input type="text" class="form-control" name="product-title" placeholder="Product Title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select class="form-control" name="product-category">
                                                <option value="">Select Product Category</option>
                                                <?php
                                                // get the catergorie on table categories
                                                $query = "SELECT * FROM categories";
                                                $result = mysqli_query($connection, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option value='{$row['name']}'>{$row['name']}</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-control" name="product-photo">
                                                <option value="">Select Product Photo</option>
                                                <?php
                                                // get the photo on table media
                                                $query = "SELECT * FROM media";
                                                $result = mysqli_query($connection, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option value='{$row['file_name']}'>{$row['file_name']}</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="lni lni-shopping-basket"></i>
                                                </span>
                                                <input type="number" class="form-control" name="product-quantity" placeholder="Product Quantity">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <p>&#x20B1;</p>
                                                </span>
                                                <input type="number" class="form-control" name="buying-price" placeholder="Buying Price">
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <p>&#x20B1;</p>
                                                </span>
                                                <input type="number" class="form-control" name="selling-price" placeholder="Selling Price">
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="add_product" class="btn btn-primary">Add product</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>