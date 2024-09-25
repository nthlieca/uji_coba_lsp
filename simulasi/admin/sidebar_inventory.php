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
                    <form action="inventory.php" method="get">
                        <input type="text" placeholder="Search" name="pencarian" value="<?php echo isset($_GET['pencarian']) ? htmlspecialchars($_GET['pencarian']) : ''; ?>"/>
                        <input type="submit" name="cari"></input>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>