<?php
if($_POST){
    $nomor_invoice = $_POST['nomor_invoice'];
    $nama = $_POST['nama'];
    $kontak = $_POST['kontak'];
    $nama_barang = $_POST['nama_barang'];
    
    if(empty($nomor_invoice)){
        echo "<script>alert('Nomor Invoice tidak boleh kosong');location.href='tambah_vendor.php';</script>";
    } elseif (empty($nama)){
        echo "<script>alert('Nama Vendor tidak boleh kosong');location.href='tambah_vendor.php';</script>";
    } elseif (empty($kontak)){
        echo "<script>alert('Kontak Vendor tidak boleh kosong');location.href='tambah_vendor.php';</script>";
    } elseif (empty($nama_barang)){
        echo "<script>alert('Nama Barang tidak boleh kosong');location.href='tambah_vendor.php';</script>";
    }else {
        include "koneksi.php";
        $insert = mysqli_query ($koneksi, "INSERT INTO vendor_supplier (nomor_invoice, nama, kontak, nama_barang) 
        VALUE ('".$nomor_invoice."','".$nama."','".$kontak."','".$nama_barang."')")
        or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses Menambahkan Vendor Baru');location.href='vendor.php';</script>";
        } else {
            "<script>alert('Gagal Menambahkan Vendor Baru');location.href='vendor.php';</script>";
        }
    }
}
?>