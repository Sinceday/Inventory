<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoTechA
    </title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<body>

    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Inventory</a>
                </div>
            </div>
            <div class="icon-logo">
                <a href="dashboard.php">
                    <img src="src/img/botecha.png" alt="Logo">
                </a>
                <div class="brand-info">
                    <div class="brand-name">Bo-Tech-A</div>
                </div>
            </div>


            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="dashboard.php" class="sidebar-link">
                        <i class="lni lni-home"></i>
                        <span>Dashboard
                        </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="categories.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="product.php" class="sidebar-link">
                        <i class="lni lni-invest-monitor"></i>
                        <span>Manage Stocks</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="add_product.php" class="sidebar-link">
                        <i class="lni lni-circle-plus"></i>
                        <span>Add Product</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="media.php" class="sidebar-link">
                        <i class="lni lni-gallery"></i>
                        <span>Media Product</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-exit"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </aside>

        <script src="src/js/script.js"></script>
</body>

</html>