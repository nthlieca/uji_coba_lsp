<?php
include "koneksi.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_vendor = $_POST['id_vendor'];
    $nama = $_POST['nama'];
    $kontak = $_POST['kontak'];
    $nama_barang = $_POST['nama_barang'];
    $id_vendor = $_POST['id_vendor'];
    $nomor_invoice = $_POST['nomor_invoice'];
    
        $sql = "UPDATE vendor_supplier SET nama='$nama', kontak='$kontak', nama_barang='$nama_barang', id_vendor='$id_vendor', nomor_invoice='$nomor_invoice' WHERE id_vendor='$id_vendor'";
    
        if ($koneksi ->query($sql) === TRUE) {
            echo "Data Berhasil Diupdate";
            header("Location: vendor.php");
        } else {
            echo "Error updating record: " . $koneksi->error;
        }
    
        $koneksi->close();
     } else {
        $id_vendor = $_GET['id'];
        $sql = "SELECT * FROM vendor_supplier WHERE id_vendor='$id_vendor'";
        $result = $koneksi->query($sql);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "Record not found!";
        }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vendor</title>
</head>
<body>
    <h3>Edit Vendor</h3>
    <form action="edit_vendor.php" method="post">
    <input type="hidden" name="id_vendor" value="<?php echo $row['id_vendor']; ?>">
        Nama Vendor :
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
        <br></br>
        Kontak Vendor :
        <input type="text" name="kontak" value="<?php echo $row['kontak']; ?>">
        <br></br>
        Nama Barang :
        <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>">
        <br></br>
        ID Vendor :
        <input type="text" name="id_vendor" value="<?php echo $row['id_vendor']; ?>">
        <br></br>
        Nomor Invoice :
        <input type="text" name="nomor_invoice" value="<?php echo $row['nomor_invoice']; ?>">
        <button type="submit" class="submit" name="submit">Edit</button>
</form>
</body>
</html>