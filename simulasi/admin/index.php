<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="../simulasi/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/dashboard.css" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <ul>
        <li><a href="index.php">Dashboard</a></li>
            <!--<li><a href="admin.php">Admin</a></li>-->
            <li><a href="inventory.php">Inventory</a></li>
            <li><a href="storage.php">Storage</a></li>
            <li><a href="vendor.php">Vendor Supplier</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <div class="header-wrapper">
                <div class="header-title">
                    <h2>Dashboard</h2>
                </div>
                <div class="user-info">
                    <div class="search-box">
                        <form action="index.php" method="get">
                        <input type="text" placeholder="Search" name="pencarian" value="<?php if(isset($_GET['pencarian'])) {echo $_GET['pencarian'];} ?>"/>
                        <input type="submit" name="submit_cari" value="Submit"></input>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>