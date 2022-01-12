<!DOCTYPE HTML>
<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('location:login.php');
  exit;
}
?>
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
    <div class="container bg-light w-90 p-5 rounded text-center" style="margin-top: 10%">
      <h3 class="heading text-black mb-2">DATA ADMIN</h3>
      <div class="section">
        <a href="admin-relawan.php">
          <button name="donasi" type="button" class="btn btn-success w-50">Relawan</button>
        </a>
      </div>
      <p></p>
      <div class="section">
        <a href="admin-donasi.php">
          <button name="relawan" type="button" class="btn btn-success w-50">Donasi</button>
        </a>
      </div>
    </div>
    <div class="container mt-2">
      <a href="logout.php">
        <button class="btn btn-danger">Logout</button>
      </a>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>