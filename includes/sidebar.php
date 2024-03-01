<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories
    </title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../src/css/main.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">BoTecha</a>
                </div>
            </div>
            <div class="icon-logo">
                <img src="../src/img/botecha.png" alt="Logo">
            </div>

            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-home"></i>
                        <span>Dashboard
                        </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Supplier List</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-list"></i>
                        <span>Item List</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-book"></i>
                        <span>Purchase Orders</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#inv" aria-expanded="false" aria-controls="inv">
                        <i class="lni lni-briefcase"></i>
                        <span>Inventory</span>
                    </a>
                    <ul id="inv" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Categories</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Manage Products</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <div class="main">
        </div>
    </div>

    <script src="../src/js/script.js"></script>
</body>

</html>