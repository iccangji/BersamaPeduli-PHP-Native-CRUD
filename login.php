<!doctype html>
<?php
session_start();
if (isset($_SESSION['user'])) {
  header("Location: admin.php");
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    <!-- nav -->
    <div class="container w-50 bg-white mt-10">
      <?php
      if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "Password Salah" or $pesan == "Username Salah") { ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?php } else { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php }
          echo $pesan; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php } ?>
          <form action="data-account.php" method="post" class="p-4 rounded login-form text-center">
            <h3 class="donate-title">Login</h3>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="grey" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                  </svg></span>
              </div>
              <input type="text" placeholder="User" name="user" class="form-control">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="grey" class="bi bi-key-fill" viewBox="0 0 16 16">
                    <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                  </svg>
                </span>
              </div>
              <input type="password" placeholder="Password" name="pass" class="form-control">
            </div>
            <button type="submit" name="btnAcc" value="Masuk" class="btn btn-secondary w-100 btn-donate">Login</button>
            <p class="akun mt-4 mb-0">Belum ada akun? <a href="signup.php">Daftar Disini</a></p>
          </form>
          </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>