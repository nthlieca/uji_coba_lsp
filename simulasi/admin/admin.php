<?php
include "header.php";
include "sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nomor ID</th>
            <th>Nama</th>
            <th>Kontak</th>
            <th>Email</th>
        </tr>

        <?php
        include "koneksi.php";
        ?>

        <?php
        $dbuser = "SELECT*FROM admin";
        $hasil_dbuser = mysqli_query($koneksi,$dbuser);

        if(!$hasil_dbuser){
            die ("koneksi gagal". mysqli_connect_error(). mysqli_connect_error());
        }

        while($data = mysqli_fetch_assoc($hasil_dbuser)){
            echo "<tr>";
            echo "<td>$data[nomor_id]</td>";
            echo "<td>$data[nama]</td>";
            echo "<td>$data[kontak]</td>";
            echo "<td>$data[email]</td>";
            echo "</tr>";
        }

        mysqli_free_result($hasil_dbuser);
        ?>
</body>
</html>