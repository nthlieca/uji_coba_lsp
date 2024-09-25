<?php
include "koneksi.php";
    $id_inventory = $_GET['id'];

    $sql = "DELETE FROM inventory WHERE id_inventory='$id_inventory'";
    
    if ($koneksi ->query($sql) === TRUE) {
        echo "Data Berhasil Dihapus";
        header("Location: inventory.php");
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
    <title>Hapus Inventory</title>
</head>
<body>
    <h3>Hapus Inventory</h3>
    <from action="hapus_inventory.php" method="post">
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
        <input type="text" name="lokasi_gudang" value="<?php echo $row['lokasi_gudang']; ?>">
        <br></br>
        Barcode :
        <input type="text" name="barcode" value="<?php echo $row['barcode']; ?>">
        <br></br>
        Harga Barang :
        <input type="text" name="harga_barang" value="<?php echo $row['harga_barang']; ?>">
        <button type="submit" class="submit" name="submit">Hapus</button>
    </from>
</body>
</html>