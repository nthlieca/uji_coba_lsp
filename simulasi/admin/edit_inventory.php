<?php
include "koneksi.php";
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_inventory = $_POST['id_inventory'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $kuantitas_stok = $_POST['kuantitas_stok'];
    $id_storage = $_POST['id_storage'];
    $barcode = $_POST['barcode'];
    $harga_barang = $_POST['harga_barang'];

    $sql = "UPDATE inventory SET nama_barang='$nama_barang', jenis_barang='$jenis_barang', kuantitas_stok='$kuantitas_stok', id_storage='$id_storage', barcode='$barcode', harga_barang='$harga_barang' WHERE id_inventory='$id_inventory'";
    
    if ($koneksi ->query($sql) === TRUE) {
        echo "Data Berhasil Diupdate";
        header("Location: inventory.php");
    } else {
        echo "Error updating record: " . $koneksi->error;
    }

    $koneksi->close();
 } else {
    $id_inventory = $_GET['id'];
    $sql = "SELECT * FROM inventory WHERE id_inventory='$id_inventory'";
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
    <title>Edit Barang</title>
</head>
<body>
    <h3>Edit Barang</h3>
    <form action="edit_inventory.php" method="post">
    <input type="hidden" name="id_inventory" value="<?php echo $row['id_inventory']; ?>">
        Nama Barang :
        <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>">
        <br></br>
        Jenis Barang :
        <input type="text" name="jenis_barang" value="<?php echo $row['jenis_barang']; ?>">
        <br></br>
        Kuantitas Stok :
        <input type="text" name="kuantitas_stok" value="<?php echo $row['kuantitas_stok']; ?>">
        <br></br>
        Lokasi Gudang :
        <input type="text" name="id_storage" value="<?php echo $row['id_storage']; ?>">
        <br></br>
        Barcode :
        <input type="text" name="barcode" value="<?php echo $row['barcode']; ?>">
        <br></br>
        Harga Barang :
        <input type="text" name="harga_barang" value="<?php echo $row['harga_barang']; ?>">
        <button type="submit" class="submit" name="submit">Edit</button>
</form>
</body>
</html>