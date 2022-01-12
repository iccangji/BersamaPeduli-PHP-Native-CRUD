<?php
include 'connect.php';


if ($_POST['btnVol']) {
    $nama = $_POST['nama'];
    $asal = $_POST['asal'];
    $tmplahir = $_POST['tmplahir'];
    $tgllahir = $_POST['tgllahir'];
    $motiv = $_POST['motiv'];
    $foto = $_FILES['foto'];
    if ($_POST['btnVol'] == 'volEdit') {
        $id = $_POST['id'];
        if ($_FILES['foto']['name'] != '') {
            $query = "SELECT foto FROM relawan WHERE id='$id'";
            $result = mysqli_query($koneksi, $query);
            $row = mysqli_fetch_array($result);
            unlink('foto/' . $row['foto']);

            $foto = $_FILES['foto']['name'];
            $tmpfoto = $_FILES['foto']['tmp_name'];
            move_uploaded_file($tmpfoto, 'foto/' . $foto);
            $query = "UPDATE relawan SET nama='$nama',asal='$asal',tmplahir='$tmplahir',tgllahir='$tgllahir ',motiv='$motiv',foto='$foto' WHERE id='$id'";
        } else {
            $query = "UPDATE relawan SET nama='$nama',asal='$asal',tmplahir='$tmplahir',tgllahir='$tgllahir ',motiv='$motiv' WHERE id='$id'";
        }
        mysqli_query($koneksi, $query);
        header('Location: admin-relawan.php');
    } else if ($_POST['btnVol'] == 'volAdd') {
        $foto = $_FILES['foto']['name'];
        $tmpfoto = $_FILES['foto']['tmp_name'];
        move_uploaded_file($tmpfoto, 'foto/' . $foto);
        $query = "INSERT INTO relawan SET nama='$nama',asal='$asal',tmplahir='$tmplahir',tgllahir='$tgllahir ',motiv='$motiv',foto='$foto'";
        mysqli_query($koneksi, $query);
        header('Location: admin-relawan.php');
    }
} else if ($_POST['btnDon']) {
    $jml = $_POST['jumlah-don'];
    $nama = $_POST['nama-don'];
    $email = $_POST['email-don'];
    if ($_POST['btnDon'] == 'donEdit') {
        $id = $_POST['id'];
        $query = "UPDATE donasi SET nama='$nama',jml='$jml',email='$email' where id='$id'";
        mysqli_query($koneksi, $query);
        header('Location: admin-donasi.php');
    } else if ($_POST['btnDon'] == 'donAdd') {
        $query = "INSERT INTO donasi SET nama='$nama',jml='$jml',email='$email'";
        mysqli_query($koneksi, $query);
        header('Location: admin-donasi.php');
    }
} else if ($_GET['donHapus']) {
    $sql = "DELETE FROM donasi WHERE id='$_GET[donHapus]'";
    $query = mysqli_query($koneksi, $sql);
    header('Location: admin-donasi.php');
} else if ($_GET['volHapus']) {
    $query = "SELECT foto FROM relawan WHERE id='$_GET[volHapus]'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_array($result);
    unlink("foto/" . $row['foto']);
    $sql = "DELETE FROM relawan WHERE id='$_GET[volHapus]'";
    $query = mysqli_query($koneksi, $sql);
    header('Location: admin-relawan.php');
}
?>