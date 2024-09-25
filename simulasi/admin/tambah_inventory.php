<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang Baru</title>
</head>
<body>
    <form action="proses_tambah_inventory.php" method="post">
        <h2>Tambah Barang Baru</h2>

        Vendor :
        <select name="id_vendor">
            <option></option>
            <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi,"SELECT*FROM vendor_supplier");
            while($data = mysqli_fetch_array($query)){
            echo '<option value="'.$data['id_vendor'].'">'.$data['nama'].'</option>';
            }
            ?>
        </select>
        <br></br>
        Nama Barang :
        <select name="nama_barang">
        <option></option>
            <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi,"SELECT*FROM vendor_supplier");
            while($data = mysqli_fetch_array($query)){
            echo '<option value="'.$data['id_vendor'].'">'.$data['nama_barang'].'</option>';
            }
            ?>
        </select>
        <br></br>
        Jenis Barang :
        <input type="text" name="jenis_barang" value="">
        <br></br>
        Kuantitas Stok :
        <input type="text" name="kuantitas_stok" value="">
        <br></br>
        Barcode :
        <input type="text" name="barcode" value="">
        <br></br>
        Harga Barang :
        <input type="text" name="harga_barang" value="">
        <br></br>
        Lokasi Gudang :
        <select name="id_storage">
            <option></option>
            <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi,"SELECT*FROM storage_unit");
            while($data = mysqli_fetch_array($query)){
            echo '<option value="'.$data['id_storage'].'">'.$data['nama_gudang'].'</option>';
            }
            ?>
        </select>
        <input type="submit" name="submit" value="submit"></input>
    </form>
</body>
</html>