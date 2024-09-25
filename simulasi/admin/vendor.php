<?php
include "header.php";
include "sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nomor Invoice</th>
            <th>Nama</th>
            <th>Kontak</th>
            <th>Nama Barang</th>
            <th>Aksi</th>
        </tr>

        <?php
        include "koneksi.php";
        $dbuser = "SELECT*FROM vendor_supplier";
        $hasil_dbuser = mysqli_query($koneksi, $dbuser);

        if(!$hasil_dbuser){
            die ("koneksi gagal". mysqli_connect_error(). mysqli_connect_error());
        }

        while($data = mysqli_fetch_assoc($hasil_dbuser)){
            echo "<tr>";
            echo "<td>$data[nomor_invoice]</td>";
            echo "<td>$data[nama]</td>";
            echo "<td>$data[kontak]</td>";
            echo "<td>$data[nama_barang]</td>";
            echo "<td>
                    <a href='edit_vendor.php?id=". $data['id_vendor'] ."' class='action-btn'>Edit</a>
                /    <a href='hapus_vendor.php?id=". $data['id_vendor'] ."' class='action-btn'>Hapus</a>
                </td>";
            echo "</tr>";
        }
        mysqli_free_result($hasil_dbuser);
        ?>
    </table>
    <br></br>
    <a href="tambah_vendor.php" style="display: inline-block; margin-bottom: 10px; padding: 10px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px; margin-left: 228px;">Tambah</a>
</body>
</html>