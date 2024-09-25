<?php
include "koneksi.php";
    $id_storage = $_GET['id'];

    $sql = "DELETE FROM storage_unit WHERE id_storage='$id_storage'";
    
    if ($koneksi ->query($sql) === TRUE) {
        echo "Data Berhasil Dihapus";
        header("Location: storage.php");
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
    <title>Hapus Storage</title>
</head>
<body>
    <h3>Hapus Storage</h3>
    <from action="hapus_storage.php" method="post">
    <input type="hidden" name="id_storage" value="<?php echo $row['id_storage']; ?>">

        Nama Gudang :
        <input type="text" name="nama_gudang" value="<?php echo $row['nama_gudang']; ?>">
        <br></br>
        Lokasi Gudang :
        <input type="text" name="lokasi_gudang" value="<?php echo $row['lokasi_gudang']; ?>">
        <button type="submit" class="submit" name="submit">Hapus</button>
    </from>
</body>
</html>