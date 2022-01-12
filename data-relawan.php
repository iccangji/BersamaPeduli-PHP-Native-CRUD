<?php
include 'connect.php';
$nama = "";
$asal = "";
$tmplahir = "";
$tgllahir = "";
$motiv = "";
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $sql = "SELECT * FROM relawan WHERE id=$id";
  $result = mysqli_query($koneksi, $sql);
  $row = mysqli_fetch_array($result);
  $nama = $row['nama'];
  $asal = $row['asal'];
  $tmplahir = $row['tmplahir'];
  $tgllahir = $row['tgllahir'];
  $motiv = $row['motiv'];
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- custom CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
  <title>BersamaPeduli</title>
</head>

<body class="bg-light">
  <div class="jumbotron-about p-5">
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php">BersamaPeduli</a>
    </nav>
    <!-- nav -->
    <div class="container w-75 bg-white p-5 rounded text-center">
      <h3 class="heading text-black mb-2">DATA RELAWAN</h3>
      <form class="mt-2" action="data-proses.php" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama</label><br>
        <input type="text" placeholder="Siapa Namamu?" name="nama" value="<?php echo $nama ?>"><br>
        <label for="asal">Asal</label><br>
        <select name="asal">
          <?php
          $asal2 = array('jawa', 'balint', 'sumatera', 'kalimantan', 'sulawesi', 'malpap');
          $asal3 = array('Jawa', 'Bali dan Nusa Tenggara', 'Sumatera', 'Kalimantan', 'Sulawesi', 'Maluku dan Papua');

          for ($i = 0; $i < count($asal2); $i++) {
            if ($asal == $asal2[$i]) {
              $sel = "selected";
            } else {
              $sel = '';
            }
            echo "<option value='$asal2[$i]' $sel>$asal3[$i]</option>";
          }
          ?>
        </select>
        <br>
        <label for="tmplahir">Tempat Tanggal Lahir</label><br>
        <input type="text" placeholder="Dimana Kamu Lahir" name="tmplahir" value="<?php echo $tmplahir ?>"><input type="date" name="tgllahir" value="<?php echo $tgllahir ?>"><br>
        <label for="motiv">Motivasi bergabung</label><br>
        <input type="text" name="motiv" placeholder="Apa Motivasimu?" value="<?php echo $motiv ?>"><br>
        <label for="foto">Foto Dirimu</label><br>
        <input type="file" name="foto"><br>
        <?php
        if (isset($_GET['edit'])) {
          echo '<button name="btnVol" value="volEdit" class="btn bg-success text-white p-2 m-2">Ubah</button>
                <input type="hidden" name="id" value=' . $id . '>';
        } else {
          echo '<button name="btnVol" value="volAdd" class="btn bg-success text-white p-2 m-2">Tambah</button>';
        }
        ?>
      </form>
    </div>
    <div class="container mt-2 text-center">
      <a href="admin.php">
        <button class="btn btn-success">Kembali</button>
      </a>
      <a href="logout.php">
        <button class="btn btn-danger">Logout</button>
      </a>
    </div>

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>