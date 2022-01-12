<?php
include 'connect.php';

$user = $_POST['user'];
$pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);

if($_POST['btnAcc']=="Masuk"){
    $query = mysqli_query($koneksi,"select * from admin where user='$user'");
    $data = mysqli_fetch_array($query);
    if(mysqli_num_rows($query) > 0){
        if(password_verify($_POST['pass'],$data['pass'])){
            echo "<script>alert('Login Berhasil')</script>";
            session_start();
            $_SESSION['user'] = $data['user'];
            header("location:admin.php");
            }
        else{
            header("Location:login.php?pesan=Password Salah");
            }
        }
    else{
        header("Location:login.php?pesan=Username Salah");
    }
}
else if ($_POST['btnAcc']=="Daftar"){
    $query = mysqli_query($koneksi,"INSERT INTO admin SET user='$user',pass='$pass'");
    if($query){
        header("Location:login.php?pesan=Akun Berhasil Dibuat");
    }
}
?>