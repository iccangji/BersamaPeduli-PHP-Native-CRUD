<?php
include 'connect.php';
$jml = "";
$nama = "";
$email = "";
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $sql = "SELECT * FROM donasi WHERE id=$id";
  $result = mysqli_query($koneksi, $sql);
  $row = mysqli_fetch_array($result);
  $jml = $row['jml'];
  $nama = $row['nama'];
  $email = $row['email'];
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
    <div class="container w-75 bg-white p-5 rounded text-center" style="margin-top: 5%">
      <h3 class="heading text-black mb-2">DATA DONASI</h3>
      <form class="mt-2" action="data-proses.php" method="POST">
        <label for="jumlah-don">Jumlah Donasi</label><br>
        <input type="text" placeholder="Jumlah Donasi" name="jumlah-don" value="<?php echo $jml ?>"><br>
        <label for="nama-don">Nama</label><br>
        <input type="text" placeholder="Nama" name="nama-don" value="<?php echo $nama ?>"><br>
        <label for="email-don">Email</label><br>
        <input type="email" placeholder="Email" name="email-don" value="<?php echo $email ?>"><br>
        <?php
        if (isset($_GET['edit'])) {
          echo '<button name="btnDon" value="donEdit" class="btn bg-success text-white p-2 m-2">Ubah</button>
                <input type="hidden" name="id" value=' . $id . '>';
        } else {
          echo '<button name="btnDon" value="donAdd" class="btn bg-success text-white p-2 m-2">Tambah</button>';
        }
        ?>
      </form>
    </div>
    <div class="container text-center mt-2">
      <a href="admin.html">
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