<?php
include 'includes/connect.php';
include 'includes/sidebar.php';

$sql = "SELECT products.*, media.file_name AS photo, categories.name AS category_name 
        FROM products 
        LEFT JOIN media ON products.media_id = media.id 
        LEFT JOIN categories ON products.categories_id = categories.id";
$result = mysqli_query($connection, $sql);

?>

<div class="main">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2>Manage Product</h2>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <div class="pull-right">
                            <a href="add_product.php" class="btn btn-primary">Add New</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px;">#</th>
                                    <th> Photo</th>
                                    <th> Product Title </th>
                                    <th class="text-center" style="width: 10%;"> Category </th>
                                    <th class="text-center" style="width: 10%;"> Instock </th>
                                    <th class="text-center" style="width: 10%;"> Buying Price </th>
                                    <th class="text-center" style="width: 10%;"> Selling Price </th>
                                    <th class="text-center" style="width: 10%;"> Product Added </th>
                                    <th class="text-center" style="width: 100px;"> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td class='text-center'>$count</td>";
                                    echo "<td><img src='uploads/{$row['photo']}' alt='Product Image' style='width: 50px; height: 50px;'></td>";
                                    echo "<td>{$row['name']}</td>";
                                    echo "<td class='text-center'>{$row['category_name']}</td>";
                                    echo "<td class='text-center'>{$row['quantity']}</td>";
                                    echo "<td class='text-center'>{$row['buy_price']}</td>";
                                    echo "<td class='text-center'>{$row['sale_price']}</td>";
                                    echo "<td class='text-center'>{$row['date']}</td>";
                                    echo "<td class='text-center'>
                                            <a href='edit_product.php?id={$row['id']}'class='btn btn-primary'>Edit</a>
                                            <a href='delete_product.php?id={$row['id']}' class='btn btn-danger ml-2'>Delete</a>
                                          </td>";
                                    echo "</tr>";
                                    $count++;
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>