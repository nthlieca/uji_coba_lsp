<?php
include "header.php";
include "sidebar_inventory.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <script>
    function checkLowStock() {
        var lowStockItems = [];
        var rows = document.querySelectorAll('table tr');
        for (var i = 1; i < rows.length; i++) {
            var stockCell = rows[i].cells[2];
            var itemName = rows[i].cells[0].textContent;
            if (stockCell && parseInt(stockCell.textContent) === 0) {
                lowStockItems.push(itemName);
            }
        }
        if (lowStockItems.length > 0) {
            alert("Peringatan: Stok habis untuk barang berikut:\n" + lowStockItems.join("\n"));
        }
    }
    window.onload = checkLowStock;
    </script>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Kuantitas Stok</th>
            <th>Lokasi Gudang</th>
            <th>Barcode</th>
            <th>Harga Barang</th>
            <th>Aksi</th>
        </tr>

        <?php
        include "koneksi.php";
        $dbuser = "SELECT*FROM inventory";
        if (isset($_GET['pencarian']) && !empty($_GET['pencarian'])) {
            $pencarian = mysqli_real_escape_string($koneksi, $_GET['pencarian']);
            $dbuser .= " WHERE nama_barang LIKE '%$pencarian%' 
                      OR jenis_barang LIKE '%$pencarian%' 
                      OR barcode LIKE '%$pencarian%'";
        }
        $hasil_dbuser = mysqli_query($koneksi, $dbuser);
        if(!$hasil_dbuser){
            die ("koneksi gagal". mysqli_connect_error(). mysqli_connect_error());
        }

        while($data = mysqli_fetch_assoc($hasil_dbuser)){
            echo "<tr>";
            echo "<td>$data[nama_barang]</td>";
            echo "<td>$data[jenis_barang]</td>";
            echo "<td>$data[kuantitas_stok]</td>";
            echo "<td>$data[id_storage]</td>";
            echo "<td>$data[barcode]</td>";
            echo "<td>$data[harga_barang]</td>";
            echo "<td>
                  <a href='edit_inventory.php?id=". $data['id_inventory'] ."' class='action-btn'>Edit</a>
                /  <a href='hapus_inventory.php?id=". $data['id_inventory'] ."' class='action-btn'>Hapus</a>
            </td>";
            echo "</tr>";
        }
        mysqli_free_result($hasil_dbuser);
        ?>
        </table>
        <br></br>
        <a href="tambah_inventory.php" style="display: inline-block; margin-bottom: 10px; padding: 10px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px; margin-left: 228px;">Tambah</a>
</body>
</html>