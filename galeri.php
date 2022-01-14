<?php 
  include_once("Backend/function.php");

  // PAGINATION TABLE 
  $batas = 4;
  $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
  $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

  $sebelumnya = $halaman - 1;
  $selanjutnya = $halaman + 1;
  
  $data = mysqli_query($connect, "SELECT * FROM tbl_wisata");
  $jumlah_data = mysqli_num_rows($data);
  $total_halaman = ceil($jumlah_data / $batas);

  // Tampilkan data sesuai dengan batas
  $data = mysqli_query($connect, "SELECT * FROM tbl_wisata LIMIT $halaman_awal, $batas");
?>
<!doctype html>
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
          <a class="nav-link page-scroll" href="index.php">Rekomendasi</a>
          <a class="nav-link page-scroll" href="index.php">About Us</a>
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

    <!-- DAFTAR WISATA -->
    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <!-- TEST Tampilan -->
                <?php
                  if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $data = mysqli_query($connect, "SELECT * FROM tbl_wisata WHERE namawisata like '%".$cari."%'");					
                  }else{
                      $data = mysqli_query($connect, "SELECT * FROM tbl_wisata LIMIT $halaman_awal, $batas");		
                  }

                  while($wisata = mysqli_fetch_array($data)) { 
                ?>
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="Backend/foto/<?php echo $wisata['foto'] ?>" width="200" height= "200px" object-fit= "cover"; >
                    </div>
                    <div class="down-content">
                      <a href="galeri-detail.php?id_wisata=<?=$wisata['id_wisata'];?>">
                        <h4><?= $wisata['namawisata'] ?></h4>
                      </a>
                      <p><?php echo substr($wisata['deskripsi'], 0, 50) ?>...<a href="galeri-detail.php?id_wisata=<?=$wisata['id_wisata'];?>"> Read more</a></p>

                      <ul class="post-info">
                        <li><a href="#"><?= $wisata['kategori'] ?></a></li>
                        <!-- <li><a href="#"><?//= $wisata['dibuat'] ?></a></li> -->
                        <!-- <li><a href="#"><i class="fa fa-comments" title="Comments"></i> 12</a></li> -->
                      </ul>
                    </div>
                  </div>
                </div>
                <?php } ?>
                <!-- WISATA 1 -->
                <!-- <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="Backend/assets/img-wisata/Air Terjun Krecekan Denu.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <a href="blog-details.html">
                        <h4>WISATA 1</h4>
                      </a>

                      <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit
                        amet eleifend.</p>

                      <ul class="post-info">
                        <li><a href="#">John Doe</a></li>
                        <li><a href="#">10.07.2020 10:20</a></li>
                        <li><a href="#"><i class="fa fa-comments" title="Comments"></i> 12</a></li>
                      </ul>
                    </div>
                  </div>
                </div> -->

                <!-- PAGINATION -->
                <div class="col-lg-12">
                  <ul class="page-numbers">
                    <!-- <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li> -->

                    <!-- Tombol Sebelumnya -->
                    <!-- <?php //if($halaman <= 1) {?>
                        <li class="disabled">
                            <a class="#" <?php //echo "href='?halaman=$sebelumnya'"; ?>> < </a>
                        </li>
                    <?php //} else { ?>
                        <li class="">
                            <a class="#" <?php //echo "href='?halaman=$sebelumnya'"; ?>> < </a>
                        </li>
                    <?php //} ?> -->

                    <!--  -->
                    <?php for($x = 1; $x <= $total_halaman; $x++){ ?> 
                        <?php if($x != $halaman){?> 
                                <li class=""><a class="" href="?halaman=<?php echo $x ?>"> <?php echo $x; ?></a></li>
                        <?php }else{ ?>
                                <li class="active"><a class=" "><?php echo $x; ?> </a> </li>
                        <?php } ?>	  
                    <?php } ?>	
                    <!--  -->

                    <!-- Tombol Selanjutnya -->
                    <?php if($halaman >= $total_halaman) {?>
                        <li class="disabled">
                            <a class="" <?php echo "href='?halaman=$selanjutnya'"; ?>> <i class="fa fa-angle-double-right"></i> </a>
                        </li>
                    <?php } else { ?>
                        <li class="">
                            <a class="" <?php echo "href='?halaman=$selanjutnya'"; ?>> <i class="fa fa-angle-double-right"></i> </a>
                        </li>
                    <?php } ?>
                    <!--  -->
                  </ul>
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="cari" class="searchText" placeholder="type to search..." autocomplete="on">
                      <!-- <button class="btn btn-primary" type="submit" id="btn-search" name="">Search</button> -->
                    </form>
                  </div>
                </div>
                <!-- <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="blog-details.html">
                            <h5>Dolorum corporis ullam, reiciendis inventore est repudiandae</h5>
                            <span>May 31, 2020</span>
                          </a></li>
                        <li><a href="blog-details.html">
                            <h5>Culpa ab quasi in rerum dolorum impedit expedita</h5>
                            <span>May 28, 2020</span>
                          </a></li>
                        <li><a href="blog-details.html">
                            <h5>Explicabo soluta corrupti dolor doloribus optio dolorum</h5>
                            <span>May 14, 2020</span>
                          </a></li>
                      </ul>
                    </div>
                  </div>
                </div> -->
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2><br>Kategori</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">Wisata Alam</a></li>
                        <li><a href="#">Wisata Religi</a></li>
                        <li><a href="#">Wisata Sejarah</a></li>
                        <li><a href="#">Wisata Keluarga</a></li>
                        <li><a href="#">Wisata Budaya</a></li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">kresek</a></li>
                        <li><a href="#">pinus</a></li>
                        <li><a href="#">catur</a></li>
                        <!-- <li><a href="#">Sit</a></li>
                        <li><a href="#">Amet</a></li>
                        <li><a href="#">Consetur</a></li>
                        <li><a href="#">Adiping</a></li> -->
                      </ul>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END DAFTAR WISATA -->
  
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
  <!-- <footer class="footer">
    <div class="container">
      <div class="row justify-content-between py-5">
        <div class="col-7 col-lg-4">
          <div class="social-media mb-4">
            <i class="fab fa-twitter fa-fw fa-2x mr-2 mr-sm-3"></i>
            <i class="fab fa-facebook-square fa-fw fa-2x mr-2 mr-sm-3"></i>
            <i class="fab fa-instagram fa-fw fa-2x mr-2 mr-sm-3"></i>
          </div>
          <p>Wisata Madiun</p>
          <p class="font-weight-normal">krisnadp23@gmail.com</p>
          <p class="font-weight-normal mb-0">Madiun Indonesia</p>
        </div>
        <div class="col-5 col-md-3 col-lg-auto">
          <nav class="nav">
            <a class="nav-link page-scroll" href="index.html">About Us</a>
            <a class="nav-link page-scroll" href="#">Galeri</a>
            <a class="nav-link page-scroll" href="index.html">Rekomendasi </a>
            <a class="nav-link page-scroll mr-0" href="index.html">Contact Us</a>
          </nav>
        </div>
      </div>
    </div>
  </footer> -->
  <!-- Akhir Footer -->


  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="frontend/assets/js/jquery-3.5.1.min.js"></script>
  <script src="frontend/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/assets/js/script.js"></script>
</body>

</html>