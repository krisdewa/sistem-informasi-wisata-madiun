<?php 
  include_once("Backend/function.php");
  // mengambil data table
  $data_testimoni = mysqli_query($connect,"SELECT * FROM tbl_testimoni");  
  $jumlah_testimoni = mysqli_num_rows($data_testimoni);
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap & Font Awesome CSS -->
  <link rel="stylesheet" href="frontend/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="frontend/assets/font-awesome/css/all.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="frontend/assets/css/main-galeri.css">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="frontend/assets/assets-blog/css/fontawesome.css">
  <link rel="stylesheet" href="frontend/assets/assets-blog/css/style.css">
  <link rel="stylesheet" href="frontend/assets/assets-blog/css/owl.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@800&family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet">

  <title>Wisata Madiun</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-3">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <i class="fas fa-paper-plane mr-2"></i>
        Wisata Madiun
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-link page-scroll" href="galeri.php">Galeri</a>
          <a class="nav-link page-scroll" href="index.php">About Us</a>
          <a class="nav-link page-scroll" href="index.php">Rekomendasi</a>
          <a class="nav-link page-scroll" href="index.php">Contact Us</a>
          <a class="nav-link page-scroll mr-0" href="Backend/auth-login.php">Login</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <div class="jumbotron rounded-0 text-center text-white d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-9 col-md-6">
          <h1 class="mb-3 hero-text">Galeri Wisata</h1>
          <!-- <p>Yuk ke Madiun
            <br> banyak wisata yang bisa dikunjungi</p> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Jumbotron -->

  <div class="container">
    <div class="row justify-content-center align-items-center">
      <h1 class="mb-5"></h1>
    </div>
  </div>

  <!-- Container -->
  <div class="container">

  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="all-blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="blog-post">
                  <?php 
                      $id_wisata = $_GET['id_wisata']; 
                      $data = mysqli_query($connect, "SELECT * FROM tbl_wisata WHERE id_wisata = '$id_wisata'");
                      while($wisata = mysqli_fetch_array($data)) { 
                  ?>
                  <div class="blog-thumb">
                    <!-- <img src="assets/images/blog-fullscreen-1-1920x700.jpg" alt=""> -->
                    <!-- <img src="Backend/foto/<//?php echo $wisata['foto'] ?>" width="100"><br> -->
                    <img src="Backend/foto/<?php echo $wisata['foto'] ?>" width="100" height= "300px" object-fit= "cover"; >
                  </div>
                  <div class="down-content">
                    <a href="galeri-detail.php?id_wisata=<?=$wisata['id_wisata'];?>"><h4><?= $wisata['namawisata'] ?></h4></a>
                    <ul class="post-info">
                      <li><a href="#"><?= $wisata['kategori'] ?></a></li>
                      <!-- <li><a href="#">10.07.2020 10:20</a></li> -->
                      <li><a href="#"><i class="fa fa-comments" title="Comments"></i> <?php echo $jumlah_testimoni; ?></a></li>
                    </ul>                    
                    <div style="text-align:justify;"><p>Alamat : <?= $wisata['alamat'] ?> <br><br> <?= $wisata['deskripsi'] ?> </p></div>
                    <div class="post-options">
                      <div class="row">
                        <div class="col-6">
                          
                        </div>
                        <!-- <div class="col-6">
                          <ul class="post-share">
                            <li><i class="fa fa-share-alt"></i></li>
                            <li><a href="#">Facebook</a>,</li>
                            <li><a href="#"> Twitter</a></li>
                          </ul>
                        </div> -->
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
              
              <!-- MENAMPILKAN TESTIMONI -->
              <div class="col-lg-12">
                <div class="sidebar-item comments">
                  <div class="sidebar-heading">
                    <h2><?php echo $jumlah_testimoni; ?> Testimoni</h2>
                  </div>
                  <div class="content">
                    <ul>
                      <?php 
                        // $id_wisata = $_GET['id_wisata']; 
                        $data = mysqli_query($connect, "SELECT * FROM tbl_testimoni");
                        while($testi = mysqli_fetch_array($data)) { 
                      ?>
                      <li>
                        <div class="author-thumb">
                          <img src="frontend/assets/img/kontak.png" alt="">
                        </div>
                        <div class="right-content">
                          <h4><?= $testi['namatestimoni'] ?><span><?= $testi['dibuat'] ?></span></h4>
                          <p><?= $testi['komentar'] ?></p>
                        </div>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- MENAMBAHKAN KOMENTAR -->
              <div class="col-lg-12">
                <div class="sidebar-item submit-comment">
                  <div class="sidebar-heading">
                    <h2>Testimoni kalian</h2>
                  </div>
                  <div class="content">
                    
                    <form id="comment" action="Backend/function.php" method="post">
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="id_testimoni" type="hidden" value="" placeholder="" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12 col-sm-12">
                          <fieldset>
                            <?php 
                              $data = mysqli_query($connect, "SELECT * FROM tbl_wisata WHERE id_wisata = '$id_wisata'");
                              while($wisata = mysqli_fetch_array($data)) { 
                            ?>
                            <input name="wisata" type="text" id="subject" placeholder="Wisata" value="<?= $wisata['namawisata'] ?>" readonly>
                            <?php } ?>
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="namatestimoni" type="text" id="namatestimoni" placeholder="Nama Kamu" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="email" type="email" id="email" placeholder="email kamu" required="">
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea name="komentar" rows="6" id="komentar" placeholder="Testimoni Kamu" required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" name="tambahdatatestimoni" id="form-submit" class="main-button">Kirim</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="row">
              <!-- <div class="col-lg-12">
                <div class="sidebar-item search">
                  <form id="search_form" name="gs" method="GET" action="#">
                    <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                  </form>
                </div>
              </div> -->
              <div class="col-lg-12">
                <div class="sidebar-item recent-posts">
                  <div class="sidebar-heading">
                    <h2>Recent Posts</h2>
                  </div>
                  <?php 
                      $data = mysqli_query($connect, "SELECT * FROM tbl_wisata");
                      while($wisata = mysqli_fetch_array($data)) { 
                  ?>
                  <div class="content">
                    <ul>
                      <li>
                        <a href="galeri-detail.php?id_wisata=<?=$wisata['id_wisata'];?>">
                          <h5><?= $wisata['namawisata'] ?></h5>
                          <span>Jan 12, 2022</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  </div>
  <!-- Akhir Container -->

  <div class="container">
    <div class="row justify-content-center align-items-center">
      <h1 class="mb-5"></h1>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row justify-content-between py-5">
        <div class="col-7 col-lg-5">
          <div class="social-media mb-4">
          <nav class="nav">
            <a class="nav-link" href="https://www.instagram.com/krisdewa_/" target="_blank"><i class="fab fa-twitter fa-fw fa-2x mr-2 mr-sm-3"></i></a>
            <a class="nav-link" href="https://www.instagram.com/krisdewa_/" target="_blank"><i class="fab fa-facebook-square fa-fw fa-2x mr-2 mr-sm-3"></i></a>
            <a class="nav-link" href="https://www.instagram.com/krisdewa_/" target="_blank"><i class="fab fa-instagram fa-fw fa-2x mr-2 mr-sm-3"></i></a>
            </nav>
          </div>
          <p>Wisata Madiun</p>
          <p class="font-weight-normal">krisnadp23@gmail.com</p>
          <p class="font-weight-normal mb-0">Madiun Indonesia</p>
        </div>
        <div class="col-5 col-md-3 col-lg-auto">
          <nav class="nav">
            <a class="nav-link page-scroll" href="#about">About Us</a>
            <a class="nav-link page-scroll" href="#gallery">Galeri</a>
            <a class="nav-link page-scroll" href="#popular">Rekomendasi </a>
            <a class="nav-link page-scroll mr-0" href="#contact">Contact Us</a>
          </nav>
        </div>
      </div>
    </div>
  </footer>
  <!-- Akhir Footer -->


  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="frontend/assets/js/jquery-3.5.1.min.js"></script>
  <script src="frontend/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/assets/js/script.js"></script>
</body>

</html>
