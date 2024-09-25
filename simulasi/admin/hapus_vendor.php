<?php
include "koneksi.php";
    $id_vendor = $_GET['id'];

    $sql = "DELETE FROM vendor_supplier WHERE id_vendor='$id_vendor'";
    
    if ($koneksi ->query($sql) === TRUE) {
        echo "Data Berhasil Dihapus";
        header("Location: vendor.php");
    } else {
        echo "Error updating record: " . $koneksi->error;
    }

    $koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Vendor</title>
</head>
<body>
    <h3>Hapus Vendor</h3>
    <from action="hapus_vendor.php" method="post">
    <input type="hidden" name="id_vendor" value="<?php echo $row['id_vendor']; ?>">

        Nama Vendor :
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
        <br></br>
        Kontak :
        <input type="text" name="kontak" value="<?php echo $row['kontak']; ?>">
        <br></br>
        Nama Barang :
        <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>">
        <br></br>
        Nomor Invoice
        <input type="text" name="nomor_invoice" value="<?php echo $row['nomor_invoice']; ?>">
        <br></br>
        <button type="submit" class="submit" name="submit">Hapus</button>
    </from>
</body>
</html>