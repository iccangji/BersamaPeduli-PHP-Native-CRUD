<?php
include 'connect.php';
$result = mysqli_query($koneksi, "SELECT COUNT(*) FROM relawan");
$result2 = mysqli_query($koneksi, "SELECT (ROUND((SUM(jml)/1000), 0)) from donasi");
$donasi = mysqli_fetch_array($result2);
$relawan = mysqli_fetch_array($result);
if ($donasi['(ROUND((SUM(jml)/1000), 0))'] == NULL) {
  $donasi['(ROUND((SUM(jml)/1000), 0))'] = 0;
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
  <div class="jumbotron p-5 rounded-lg img-fluid">
    <!-- nav -->
    <nav class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand" href="index.php">BersamaPeduli</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto mb-auto mb-lg-0">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          <a class="nav-link" href="#about">Tentang Kami</a>
          <a class="nav-link" href="#program">Program Bantuan</a>
          <a class="nav-link" href="#rekap">Laporan Usaha</a>
          <a class="nav-link nav-admin" href="admin.php">Admin</a>
        </div>
        <span class="d-flex admin pl-auto align-items-center">
          <a class="nav-link" href="admin.php">Admin</a>
          <span class="text-light">0812-3456-7890</span>
        </span>
      </div>
    </nav>
    <!-- nav -->
    <div class="container">
      <div class="row">
        <div class="col">
          <span class="btn btn-title">BersamaPeduli</span>
          <h1 class="heading text-white mb-2">Memberikan bantuan kepada mereka yang membutuhkan</h1>
          <p class="text-white lead text-white-50">BersamaPeduli adalah organisasi sosial dengan beberapa program sosial bagi anak-anak yatim piatu, tidak mampu, terlantar, cacat mental , lanjut usia, daerah yang terdampak kemiskinan dan berncana alam.</p>
          <a class="btn btn-donasi" href="#" role="button">Berikan Donasi</a>
        </div>
        <div class="col pb-3" id="donasi">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="bg-white p-5 rounded donation-form text-center">
            <h3 class="donate-title">Form Donasi</h3>
            <div class="form-field">
              <div class="container">
                <div class="row">
                  <div class="col-sm p-0">
                    <label for="amount-1" class="amount js-amount" data-value="50000">
                      <input type="radio" id="amount-1" name="radio-amount" checked="true">
                      <span>IDR 50K</span>
                    </label>
                  </div>
                  <div class="col-sm p-0">
                    <label for="amount-2" class="amount js-amount" data-value="100000">
                      <input type="radio" id="amount-2" name="radio-amount">
                      <span>IDR 100K</span>
                    </label>
                  </div>
                  <div class="col-sm p-0">
                    <label for="amount-3" class="amount js-amount" data-value="500000">
                      <input type="radio" id="amount-3" name="radio-amount">
                      <span>IDR 500K</span>
                    </label>
                  </div>
                  <div class="col-sm p-0">
                    <label for="amount-4" class="amount js-amount" data-value="1000000">
                      <input type="radio" id="amount-4" name="radio-amount">
                      <span>IDR 1000K</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col w-100 px-2">
                  <input type="text" placeholder="Jumlah Donasi" name="jumlah-don" class="form-control  mb-4">
                </div>
              </div>
              <div class="row">
                <div class="col w-100 px-2">
                  <input type="text" placeholder="Nama" name="nama-don" class="form-control  mb-4">
                </div>
              </div>
              <div class="row">
                <div class="col w-100 px-2">
                  <input type="email" placeholder="Email" name="email-don" class="form-control  mb-2">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col w-100 mt-3">
                <button name="btnDon" type="submit" class="btn btn-secondary btn-donate" value="donAdd">Donasi Sekarang</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="section bg-light" id="visimisi">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="vision">
            <h2>Visi</h2>
            <p class="mb-4 lead">Menjadi wadah pelayanan sosial bagi masyarakatyang membutuhkan dengan semua latar belakang dan semua kelompok usia</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="mission">
            <h2>Misi</h2>
            <p class="mb-4 lead">Membantu masyarakat yang kurang beruntung secara sosial dijalankan dengan profesional dan kasih sayang dan bersinderi dengan lembaga lainnya</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section cause-section bg-light">


    <div class="container" id="program">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-6 text-center">
          <span class="subheading mb-3">Kesulitan Saudara Kita</span>
          <h2 class="heading">Mereka yang Membutuhkan</h2>
          <p>Saudara kita diluar dari seluruh lapisan masyarakat sana masih banyak kita diluar sana masih membutuhkan uluran tangan kita.</p>
        </div>
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="3">
              </button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner justify-content-center">
            <div class="carousel-item active">
              <img src="images/img_v_5-min.jpg" alt="daeraha" class="d-block" style="width:100%">
              <div class="carousel-caption">
                <h3>Daerah A</h3>
                <p>Kelaparan dan kurang gizi yang masih melanda</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/img_v_7-min.jpg" alt="daerahb" class="d-block" style="width:100%">
              <div class="carousel-caption">
                <h3>Daerah B</h3>
                <p>Sulitnya akses pendidikan menghambat para pelajar</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/img_v_3-min.jpg" alt="daerahc" class="d-block" style="width:100%">
              <div class="carousel-caption">
                <h3>Daerah C</h3>
                <p>Minimnya akses air bersih menyebabkan rendahnya sanitasi</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/img_v_4-min.jpg" alt="daerahd" class="d-block" style="width:100%">
              <div class="carousel-caption">
                <h3>Daerah D</h3>
                <p>Rendahnya stabilitas pangan yang belum dibenahi</p>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row mb-5 align-items-center justify-content-between">
        <div class="col-lg-5">
          <span class="subheading mb-3">Apa Itu BersamaPeduli</span>
          <h2 class="heading" id="about">Tentang Kami</h2>
          <p>Yayasan Amal Mulia Indonesia adalah organisasi sosial dengan beberapa program sosial bagi anak-anak juga berperan sebagai lembaga pendidikan yang menerapkan prinsip keseimbangan intelektual, karakter, keterampilan, keahlian anak asuh dan peserta didik.</p>
        </div>
        <div class="col-lg-6 about">
          <blockquote>
            Seorang individu belum mulai hidup sampai ia dapat mengatasi batasan sempit dari kepedulian individualistiknya ke kepedulian yang lebih luas dari seluruh umat manusia. <br> <b>- Martin Luther King Jr</b>
          </blockquote>
        </div>
      </div>
    </div>
  </div>


  <div class="section flip-section secondary-bg" style="background-image: url('images/img_v_8-min.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mx-auto text-center help">
          <span class="btn-title">Bantu Sekarang</span>
          <h3 class="mb-4 heading text-white">Ayo Bantu Saudara Kita yang Belum Beruntung</h3>
          <a href="#relawan">
            <span class="btn btn-outline-white me-3">Menjadi Relawan</span>
          </a>
          <a href="#donasi">
            <span class="btn btn-outline-white">Memberikan Donasi</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  </div>
  <div class="section bg-light m-200" id="rekap">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5">
          <span class="subheading mb-3">Perjalanan Kami</span>
          <h2 class="heading mb-4">Bantuan yang telah kami kumpulkan</h2>
          <p>Relawan dan saudara-saudara yang telah bemberikan sumbangsihnya hingga saat ini</p>
        </div>
        <div class="col-lg-6">
          <div class="row section-counter">
            <div class="col-lg-6">
              <div class="counter">
                <div class="d-block">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffc85c" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                  </svg>
                </div>
                <span class="number countup"><?php echo $relawan['COUNT(*)'] ?></span>
                <span class="d-block">Total Relawan</span>
              </div>
              <div class="counter">
                <div class="d-block">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="#ffc85c" width="40" height="40" class="bi bi-cash" viewBox="0 0 16 16">
                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                    <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                  </svg>
                </div>
                <i class="flaticon-organs-donation d-block text-secondary"></i>
                <span class="number countup"><?php echo $donasi['(ROUND((SUM(jml)/1000), 0))'] ?>K</span>
                <span class="d-block">Total Donasi</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section flip-section" style="background-image: url('images/img_v_2-min.jpg')">
    <div class="blob-1">
      <img src="images/blob.png" alt="Image" class="img-fluid">
    </div>
    <div class="container">
      <div class="row justify-content-center mb-50 p-3">
        <div class="col-lg-7 text-center mt-10 p-10 volunteer" id="relawan">
          <span class="btn-title mb-600 p-10">Daftar Relawan</span>
          <h2 class="heading text-white">Gabung dengan kami sekarang juga!</h2>
          <form class="mt-2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <div class="container justify-content-center">
              <div class="mb-3 row">
                <label for="nama">Nama</label>
                <div class="col">
                  <input type="text" placeholder="Siapa Namamu?" name="nama">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="asal">Asal</label>
                <div class="col">
                  <select name="asal" class="form-select w-50 mx-auto">
                    <option selected>Asal Daerah</option>
                    <option value="jawa">Jawa</option>
                    <option value="balint">Bali dan Nusa Tenggara</option>
                    <option value="sumatera">Sumatera</option>
                    <option value="kalimantan">Kalimantan</option>
                    <option value="sulawesi">Sulawesi</option>
                    <option value="sulawesi">Maluku dan Papua</option>
                  </select>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="tmplahir">Tempat Tanggal Lahir</label>
                <div class="col">
                  <input type="text" placeholder="Dimana Kamu Lahir" class="mx-2" name="tmplahir"><input type="date" name="tgllahir">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="motiv">Motivasi bergabung</label>
                <div class="col">
                  <input type="text" name="motiv" placeholder="Apa Motivasimu?">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="foto">Foto Dirimu</label>
                <div class="col">
                  <input class="form-control px-3 w-50 mx-auto" type="file" name="foto">
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col">
                  <button name="btnVol" value="volAdd">Daftar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="site-footer">
    <div class="container">

      <div class="row">
        <div class="col">
          <div class="widget">
            <h3>Navigation</h3>
            <ul class="list-unstyled float-left links">
              <li><a href="#about">Tentang Kami</a></li>
              <li><a href="#program">Program Bantuan</a></li>
              <li><a href="#rekap">Laporan Usaha</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->


        <div class="col">
          <div class="widget">
            <h3>Contact</h3>
            <address>Kota Kendari, Sulawesi Tenggara</address>
            <ul class="list-unstyled links mb-4">
              <li><a href="tel://11234567890">0812-3456-7890</a></li>
              <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div> <!-- /.site-footer -->

  <script src="index.js"></script>
  <script src="http://127.0.0.1/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </script>
</body>
<?php
include 'connect.php';
if (isset($_POST['btnVol'])) {
  $nama = $_POST['nama'];
  $asal = $_POST['asal'];
  $tmplahir = $_POST['tmplahir'];
  $tgllahir = $_POST['tgllahir'];
  $motiv = $_POST['motiv'];
  $foto = $_FILES['foto'];
  $foto = $_FILES['foto']['name'];
  $tmpfoto = $_FILES['foto']['tmp_name'];
  move_uploaded_file($tmpfoto, 'foto/' . $foto);
  $query = "INSERT INTO relawan SET nama='$nama',asal='$asal',tmplahir='$tmplahir',tgllahir='$tgllahir ',motiv='$motiv',foto='$foto'";
  mysqli_query($koneksi, $query);
  echo '<script>alert("Terima Kasih atas Bantuan Anda!")</script>';
} else if (isset($_POST['btnDon'])) {
  $jml = $_POST['jumlah-don'];
  $nama = $_POST['nama-don'];
  $email = $_POST['email-don'];
  $query = "INSERT INTO donasi SET nama='$nama',jml='$jml',email='$email'";
  mysqli_query($koneksi, $query);
  echo '<script>alert("Terima Kasih atas Bantuan Anda!")</script>';
}
unset($_POST);
exit;
?>

</html>