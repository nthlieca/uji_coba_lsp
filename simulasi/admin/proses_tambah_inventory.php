<?php
if($_POST){
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $kuantitas_stok = $_POST['kuantitas_stok'];
    $barcode = $_POST['barcode'];
    $id_vendor = $_POST['id_vendor'];
    $harga_barang = $_POST['harga_barang'];
    $id_storage = $_POST['id_storage'];
   if(empty($jenis_barang)){
        echo "<script>alert('Jenis Barang Tidak Boleh Kosong');location.href='tambah_inventory.php';</script>";
    } elseif (empty($kuantitas_stok)){
        echo "<script>alert('Kuantitas Stok Tidak Boleh Kosong');location.href='tambah_inventory.php';</script>";
    } elseif (empty($barcode)){
        echo "<script>alert('Barcode Tidak Boleh Kosong');location.href='tambah_inventory.php';</script>";
    } elseif (empty($harga_barang)){
        echo "<script>alert('Harga Barang Tidak Boleh Kosong');location.href='tambah_inventory.php';</script>";
    }else {
        include "koneksi.php";
        $insert = mysqli_query($koneksi,"INSERT INTO inventory (nama_barang, jenis_barang, kuantitas_stok , barcode, id_vendor, harga_barang, id_storage) value
        ('".$nama_barang."','".$jenis_barang."','".$kuantitas_stok."','".$barcode."','".$id_vendor."', '".$harga_barang."', '".$id_storage."')")
        or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses Menambahkan Barang Baru');location.href='inventory.php';</script>";
        } else {
            "<script>alert('Gagal Menambahkan Barang Baru');location.href='inventory.php';</script>";
        }
    }
}
?>