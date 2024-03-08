<?php
include 'includes/connect.php';
include 'includes/sidebar.php';
?>

<div class="main">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>
                        <span class="glyphicon glyphicon-th"></span>
                        <span>Add New Product</span>
                    </strong>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form method="post" action="add_product.php" class="clearfix">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-th-large"></i>
                                    </span>
                                    <input type="text" class="form-control" name="product-title" placeholder="Product Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="form-control" name="product-categorie">
                                            <option value="">Select Product Category</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="product-photo">
                                            <option value="">Select Product Photo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-shopping-cart"></i>
                                            </span>
                                            <input type="number" class="form-control" name="product-quantity" placeholder="Product Quantity">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-usd"></i>
                                            </span>
                                            <input type="number" class="form-control" name="buying-price" placeholder="Buying Price">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-usd"></i>
                                            </span>
                                            <input type="number" class="form-control" name="saleing-price" placeholder="Selling Price">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="add_product" class="btn btn-danger">Add product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>