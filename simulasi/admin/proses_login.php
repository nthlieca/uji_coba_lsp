<?php
include "koneksi.php";
?>

<?php
if (isset($_POST['submit'])){
    $username = htmlentities(strip_tags(trim($_POST['username'])));
    $password = htmlentities(strip_tags(trim($_POST['password'])));
    $data = mysqli_query($koneksi,"SELECT*FROM user WHERE username='$username' and password='$password'");
    $hitung = mysqli_num_rows($data);
}

if ($hitung > 0){
    $ambildata = mysqli_fetch_array($data);
    $role = $ambildata['level'];

    if ($role == 'admin'){
        //jika admin
        $_SESSION['log'] = 'Logged';
        $_SESSION['level'] = 'admin';
        header('location:admin');
    }
}
?>