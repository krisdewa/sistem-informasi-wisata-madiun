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
  <link rel="stylesheet" href="frontend/assets/css/main.css">

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
      <a class="navbar-brand" href="#">
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
          <a class="nav-link page-scroll" href="#popular">Rekomendasi</a>
          <a class="nav-link page-scroll" href="#about">About Us</a>
          <a class="nav-link page-scroll" href="#contact">Contact Us</a>
          <a class="nav-link page-scroll mr-0" href="Backend/auth-login.php">LOGIN</a>
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
          <h1 class="mb-3 hero-text">Wisata Madiun</h1>
          <p>Yuk ke Madiun
            <br> banyak wisata yang bisa dikunjungi</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Jumbotron -->

  <!-- Container -->
  <div class="container">

    <!-- Find Trip -->
    <div class="row justify-content-center align-items-center">
      <!-- <div class="col-md-11 find-trip bg-white shadow">
        <form>
          <div class="form-row">
            <div class="col-4 col-sm-9 p-0 m-0">
              <input type="text" class="form-control input-go" placeholder="Search">
            </div>
            <div class="col-12 col-sm-3 p-0 m-0">
              <button class="btn btn-find-trip btn-block">
                Cari Wisata
                <i class="fas fa-search ml-3 ml-lg-4 d-sm-none d-lg-inline-block"></i>
              </button>
            </div>
          </div>
        </form>
      </div> -->
    </div>
    <!-- Akhir Find Trip -->

    <!-- Top Recommendation -->
    <section class="top-recommendation" id="popular">
      <h1 class="mb-5"><span>Rekomendasi</span> Terbaik</h1>

      <div class="row">
        <div class="col">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol> -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <?php 
                    include_once("Backend/function.php");

                    // PAGINATION TABLE 
                    $batas = 3;
                    
                    // Tampilkan data sesuai dengan batas
                    $data = mysqli_query($connect, "SELECT * FROM tbl_wisata LIMIT $batas");
  
                    while($wisata = mysqli_fetch_array($data)) { 

                  ?>
                  <div class="col-md-4">
                    <div class="card mb-4">
                      <!-- <img src="Backend/assets/img-wisata/gunung wilis.jpg" class="card-img-top"> -->
                      <img src="Backend/foto/<?php echo $wisata['foto'] ?>" width="200" height= "200px" object-fit= "cover"; class="card-img-top">
                      <!-- <div class="badge-img"><//?= $wisata['kategori'] ?></div> -->
                      <div class="card-body">
                        <h5 class="card-title py-1"><?= $wisata['namawisata'] ?></h5>
                        <div class="card-text py-1">Kategori <?= $wisata['kategori'] ?></div>
                        <a href="#" class="card-link mt-3 d-inline-block">Read more <a href="galeri-detail.php?id_wisata=<?=$wisata['id_wisata'];?>"><i class="fas fa-arrow-right ml-2"></i></a>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  <!-- <div class="col-md-4">
                    <div class="card mb-4">
                      <img src="Backend/assets/img-wisata/Air Terjun Krecekan Denu.jpg" class="card-img-top">
                      <div class="badge-img"><i class="fas fa-star mr-1"></i> 4.5</div>
                      <div class="card-body">
                        <h5 class="card-title py-1">Air Terjun Krecekan Denu</h5>
                        <div class="card-text py-1"><i class="far fa-calendar-alt fa-fw mr-3"></i>28 October - 31
                          October</div>
                        <div class="card-text py-1"><i class="fas fa-plane fa-rotate-270 fa-fw mr-3"></i>2 May</div>
                        <div class="card-text py-1"><i class="fas fa-dollar-sign fa-fw mr-3"></i>Starting at $300</div>
                        <a href="#" class="card-link mt-3 d-inline-block">Read more <i
                            class="fas fa-arrow-right ml-2"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4">
                      <img src="Backend/assets/img-wisata/air terjun kucur.jpg" class="card-img-top">
                      <div class="badge-img">Frequently visited</div>
                      <div class="card-body">
                        <h5 class="card-title py-1">Air Terjun Kucur</h5>
                        <div class="card-text py-1"><i class="far fa-calendar-alt fa-fw mr-3"></i>28 October - 31
                          October</div>
                        <div class="card-text py-1"><i class="fas fa-plane fa-rotate-270 fa-fw mr-3"></i>2 May</div>
                        <div class="card-text py-1"><i class="fas fa-dollar-sign fa-fw mr-3"></i>Starting at $300</div>
                        <a href="#" class="card-link mt-3 d-inline-block">Read more <i
                            class="fas fa-arrow-right ml-2"></i></a>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
              <!-- <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-4">
                      <img src="Backend/assets/img-wisata/MonumenKresek.png" class="card-img-top">
                      <div class="badge-img">Most Popular</div>
                      <div class="card-body">
                        <h5 class="card-title py-1">Monumen Kresek</h5>
                        <div class="card-text py-1"><i class="far fa-calendar-alt fa-fw mr-3"></i>28 October - 31
                          October</div>
                        <div class="card-text py-1"><i class="fas fa-plane fa-rotate-270 fa-fw mr-3"></i>2 May</div>
                        <div class="card-text py-1"><i class="fas fa-dollar-sign fa-fw mr-3"></i>Starting at $300</div>
                        <a href="#" class="card-link mt-3 d-inline-block">Read more <i
                            class="fas fa-arrow-right ml-2"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4">
                      <img src="Backend/assets/img-wisata/MonumenKresek.png" class="card-img-top">
                      <div class="badge-img"><i class="fas fa-star mr-1"></i> 4.5</div>
                      <div class="card-body">
                        <h5 class="card-title py-1">Wana Wisata Grape</h5>
                        <div class="card-text py-1"><i class="far fa-calendar-alt fa-fw mr-3"></i>28 October - 31
                          October</div>
                        <div class="card-text py-1"><i class="fas fa-plane fa-rotate-270 fa-fw mr-3"></i>2 May</div>
                        <div class="card-text py-1"><i class="fas fa-dollar-sign fa-fw mr-3"></i>Starting at $300</div>
                        <a href="#" class="card-link mt-3 d-inline-block">Read more <i
                            class="fas fa-arrow-right ml-2"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4">
                      <img src="Backend/assets/img-wisata/MonumenKresek.png" class="card-img-top">
                      <div class="badge-img">Frequently visited</div>
                      <div class="card-body">
                        <h5 class="card-title py-1">Hutan Pinus Nongko Ijo</h5>
                        <div class="card-text py-1"><i class="far fa-calendar-alt fa-fw mr-3"></i>28 October - 31
                          October</div>
                        <div class="card-text py-1"><i class="fas fa-plane fa-rotate-270 fa-fw mr-3"></i>2 May</div>
                        <div class="card-text py-1"><i class="fas fa-dollar-sign fa-fw mr-3"></i>Starting at $300</div>
                        <a href="#" class="card-link mt-3 d-inline-block">Read more <i
                            class="fas fa-arrow-right ml-2"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-4">
                      <img src="Backend/assets/img-wisata/MonumenKresek.png" class="card-img-top">
                      <div class="badge-img">Most Popular</div>
                      <div class="card-body">
                        <h5 class="card-title py-1">Taman Wisata Gunung Kendil</h5>
                        <div class="card-text py-1"><i class="far fa-calendar-alt fa-fw mr-3"></i>28 October - 31
                          October</div>
                        <div class="card-text py-1"><i class="fas fa-plane fa-rotate-270 fa-fw mr-3"></i>2 May</div>
                        <div class="card-text py-1"><i class="fas fa-dollar-sign fa-fw mr-3"></i>Starting at $300</div>
                        <a href="#" class="card-link mt-3 d-inline-block">Read more <i
                            class="fas fa-arrow-right ml-2"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4">
                      <img src="Backend/assets/img-wisata/MonumenKresek.png" class="card-img-top">
                      <div class="badge-img"><i class="fas fa-star mr-1"></i> 4.5</div>
                      <div class="card-body">
                        <h5 class="card-title py-1">Waduk Bening Widas</h5>
                        <div class="card-text py-1"><i class="far fa-calendar-alt fa-fw mr-3"></i>28 October - 31
                          October</div>
                        <div class="card-text py-1"><i class="fas fa-plane fa-rotate-270 fa-fw mr-3"></i>2 May</div>
                        <div class="card-text py-1"><i class="fas fa-dollar-sign fa-fw mr-3"></i>Starting at $300</div>
                        <a href="#" class="card-link mt-3 d-inline-block">Read more <i
                            class="fas fa-arrow-right ml-2"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4">
                      <img src="Backend/assets/img-wisata/MonumenKresek.png" class="card-img-top">
                      <div class="badge-img">Frequently visited</div>
                      <div class="card-body">
                        <h5 class="card-title py-1">Air Terjun Kedung Malam</h5>
                        <div class="card-text py-1"><i class="far fa-calendar-alt fa-fw mr-3"></i>28 October - 31
                          October</div>
                        <div class="card-text py-1"><i class="fas fa-plane fa-rotate-270 fa-fw mr-3"></i>2 May</div>
                        <div class="card-text py-1"><i class="fas fa-dollar-sign fa-fw mr-3"></i>Starting at $300</div>
                        <a href="#" class="card-link mt-3 d-inline-block">Read more <i
                            class="fas fa-arrow-right ml-2"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Top Recommendation -->

  </div>
  <!-- Akhir Container -->

  <section class="mobile">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-10 col-sm-7 col-md-6">
          <h1 class="mb-3">Madiun</h1>
          <p class="d-inline-block my-3">Kota Madiun mendapat julukan sebagai “Kota Gadis”, “Kota Brem”, “Kota Pecel”,
            “Kota Budaya”, “Kota Industri”, “Kota Karismatik”, dan “Kota Pendekar”.
          </p>
          <!-- <div class="store mt-5">
            <a href="#"><img class="mr-3" src="img/mobile/gplay.png"></a>
            <a href="#"><img src="img/mobile/appstore.png"></a>
          </div> -->
        </div>
        <!-- <div class="col-sm-4 col-md-4 text-right">
          <img class="mobile-img img-fluid px-0 px-lg-3" src="img/mobile/phone.png">
        </div> -->
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <!-- <section class="gallery" id="gallery">
    <div class="container">
      <h1 class="mb-4"><span>Our</span> Gallery</h1>

      <div class="row">
        <div class="col-12">
          <ul class="nav justify-content-center px-2 px-lg-5" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link mx-3 mx-lg-4 active" id="beach-tab" data-toggle="tab" href="#beach" role="tab"
                aria-controls="beach" aria-selected="true">Beach</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link mx-3 mx-lg-4" id="mount-tab" data-toggle="tab" href="#mount" role="tab"
                aria-controls="mount" aria-selected="false">Mountain</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link mx-3 mx-lg-4" id="waterfall-tab" data-toggle="tab" href="#waterfall" role="tab"
                aria-controls="waterfall" aria-selected="false">Waterfall</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link mx-3 mx-lg-4" id="forest-tab" data-toggle="tab" href="#forest" role="tab"
                aria-controls="forest" aria-selected="false">Forest</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link mx-3 mx-lg-4" id="lake-tab" data-toggle="tab" href="#lake" role="tab"
                aria-controls="lake" aria-selected="false">Lake</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="beach" role="tabpanel" aria-labelledby="beach-tab">
              <div class="row mt-3 mt-md-4">
                <div class="col-12 col-sm-5 pr-sm-1 d-flex">
                  <div class="left-img d-flex flex-fill flex-sm-grow-0">
                    <img src="img/gallery/majorca.png"
                      class="img-fluid d-flex flex-fill flex-sm-grow-0 flex-sm-shrink-0">
                    <div class="badge-img">Majorca Beach</div>
                  </div>
                </div>
                <div class="col-12 col-sm-7 col-xl-auto pl-sm-2 text-right mt-3 mt-sm-0 d-flex flex-column">
                  <div class="row">
                    <div class="col-sm-12 d-flex">
                      <div class="top-right-img">
                        <img src="img/gallery/lagos.png" class="img-fluid flex-sm-fill">
                        <div class="badge-img">Lagos</div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3 mt-sm-auto">
                    <div class="col-7 col-xl-auto pr-sm-2 d-flex">
                      <div class="bottom-left-img d-flex">
                        <img src="img/gallery/indrayanti2@2x.png" class="img-fluid">
                        <div class="badge-img">Indrayanti</div>
                      </div>
                    </div>
                    <div class="col-5 col-xl-auto pl-sm-2 d-flex">
                      <div class="bottom-right-img d-flex">
                        <img src="img/gallery/more2@2x.png" class="img-fluid">
                        <div class="see-more text-center">
                          <a href="#" class="text-white text-decoration-none">
                            <i class="fas fa-arrow-right fa-lg"></i>
                            <br>See more
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="mount" role="tabpanel" aria-labelledby="mount-tab">
              <div class="row mt-3 mt-md-4">
                <div class="col-12 col-sm-5 pr-sm-1 d-flex">
                  <div class="left-img d-flex flex-fill flex-sm-grow-0">
                    <img src="img/gallery/mountain/fatukopa@2x.png"
                      class="img-fluid d-flex flex-fill flex-sm-grow-0 flex-sm-shrink-0">
                    <div class="badge-img">Fatukopa</div>
                  </div>
                </div>
                <div class="col-12 col-sm-7 col-xl-auto pl-sm-2 text-right mt-3 mt-sm-0 d-flex flex-column">
                  <div class="row">
                    <div class="col-sm-12 d-flex">
                      <div class="top-right-img">
                        <img src="img/gallery/mountain/prau@2x.png" class="img-fluid flex-sm-fill">
                        <div class="badge-img">Mount Prau</div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3 mt-sm-auto">
                    <div class="col-7 col-xl-auto pr-sm-2 d-flex">
                      <div class="bottom-left-img d-flex">
                        <img src="img/gallery/mountain/bromo@2x.png" class="img-fluid">
                        <div class="badge-img">Bromo</div>
                      </div>
                    </div>
                    <div class="col-5 col-xl-auto pl-sm-2 d-flex">
                      <div class="bottom-right-img d-flex">
                        <img src="img/gallery/mountain/ijen@2x.png" class="img-fluid">
                        <div class="see-more text-center">
                          <a href="#" class="text-white text-decoration-none">
                            <i class="fas fa-arrow-right fa-lg"></i>
                            <br>See more
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="waterfall" role="tabpanel" aria-labelledby="waterfall-tab">
              <div class="row mt-3 mt-md-4">
                <div class="col-12 col-sm-5 pr-sm-1 d-flex">
                  <div class="left-img d-flex flex-fill flex-sm-grow-0">
                    <img src="img/gallery/waterfall/kapas-biru.png"
                      class="img-fluid d-flex flex-fill flex-sm-grow-0 flex-sm-shrink-0">
                    <div class="badge-img">Kapas Biru</div>
                  </div>
                </div>
                <div class="col-12 col-sm-7 col-xl-auto pl-sm-2 text-right mt-3 mt-sm-0 d-flex flex-column">
                  <div class="row">
                    <div class="col-sm-12 d-flex">
                      <div class="top-right-img">
                        <img src="img/gallery/waterfall/bissappu.png" class="img-fluid flex-sm-fill">
                        <div class="badge-img">Bissappu</div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3 mt-sm-auto">
                    <div class="col-7 col-xl-auto pr-sm-2 d-flex">
                      <div class="bottom-left-img d-flex">
                        <img src="img/gallery/waterfall/kanto-lampo.png" class="img-fluid">
                        <div class="badge-img">Kanto Lampo</div>
                      </div>
                    </div>
                    <div class="col-5 col-xl-auto pl-sm-2 d-flex">
                      <div class="bottom-right-img d-flex">
                        <img src="img/gallery/waterfall/cikanteh.png" class="img-fluid">
                        <div class="see-more text-center">
                          <a href="#" class="text-white text-decoration-none">
                            <i class="fas fa-arrow-right fa-lg"></i>
                            <br>See more
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="forest" role="tabpanel" aria-labelledby="forest-tab">
              <div class="row mt-3 mt-md-4">
                <div class="col-12 col-sm-5 pr-sm-1 d-flex">
                  <div class="left-img d-flex flex-fill flex-sm-grow-0">
                    <img src="img/gallery/forest/kragilan@2x.png"
                      class="img-fluid d-flex flex-fill flex-sm-grow-0 flex-sm-shrink-0">
                    <div class="badge-img">Kragilan</div>
                  </div>
                </div>
                <div class="col-12 col-sm-7 col-xl-auto pl-sm-2 text-right mt-3 mt-sm-0 d-flex flex-column">
                  <div class="row">
                    <div class="col-sm-12 d-flex">
                      <div class="top-right-img">
                        <img src="img/gallery/forest/mangunan@2x.png" class="img-fluid flex-sm-fill">
                        <div class="badge-img">Mangunan</div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3 mt-sm-auto">
                    <div class="col-7 col-xl-auto pr-sm-2 d-flex">
                      <div class="bottom-left-img d-flex">
                        <img src="img/gallery/forest/wuwu-kembar@2x.png" class="img-fluid">
                        <div class="badge-img">Wuwu Kembar</div>
                      </div>
                    </div>
                    <div class="col-5 col-xl-auto pl-sm-2 d-flex">
                      <div class="bottom-right-img d-flex">
                        <img src="img/gallery/forest/bissapu@2x.png" class="img-fluid">
                        <div class="see-more text-center">
                          <a href="#" class="text-white text-decoration-none">
                            <i class="fas fa-arrow-right fa-lg"></i>
                            <br>See more
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="lake" role="tabpanel" aria-labelledby="lake-tab">
              <div class="row mt-3 mt-md-4">
                <div class="col-12 col-sm-5 pr-sm-1 d-flex">
                  <div class="left-img d-flex flex-fill flex-sm-grow-0">
                    <img src="img/gallery/lake/toba@2x.png"
                      class="img-fluid d-flex flex-fill flex-sm-grow-0 flex-sm-shrink-0">
                    <div class="badge-img">Lake Toba</div>
                  </div>
                </div>
                <div class="col-12 col-sm-7 col-xl-auto pl-sm-2 text-right mt-3 mt-sm-0 d-flex flex-column">
                  <div class="row">
                    <div class="col-sm-12 d-flex">
                      <div class="top-right-img">
                        <img src="img/gallery/lake/ranu-kumbolo@2x.png" class="img-fluid flex-sm-fill">
                        <div class="badge-img">Ranu Kumbolo</div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3 mt-sm-auto">
                    <div class="col-7 col-xl-auto pr-sm-2 d-flex">
                      <div class="bottom-left-img d-flex">
                        <img src="img/gallery/lake/kelimutu@2x.png" class="img-fluid">
                        <div class="badge-img">Kelimutu</div>
                      </div>
                    </div>
                    <div class="col-5 col-xl-auto pl-sm-2 d-flex">
                      <div class="bottom-right-img d-flex">
                        <img src="img/gallery/lake/labuan-cermin@2x.png" class="img-fluid">
                        <div class="see-more text-center">
                          <a href="#" class="text-white text-decoration-none">
                            <i class="fas fa-arrow-right fa-lg"></i>
                            <br>See more
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- Akhir Gallery -->

  <!-- About Us -->
  <section class="about" id="about">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-md-5">
          <h1 class="mb-3"><span>About</span> Us</h1>
          <!-- <p class="my-4">Website Wisata Madiun ini dibuat untuk memenuhi Tugas Akhir Mata Kuliah Pemrograman Web
            Dinamis
          </p> -->
          <p class="my-4">Website Wisata Madiun ini dibuat untuk memenuhi Responsi Praktikum Pemrograman Web
            Dinamis
          </p>
          <p>Saya Krisna Dewa Pratama dengan Nim 1900018336 dari kelas Pemrograman Web Dinamis kelas A</p>
          <!-- <a href="#" class="mt-4 d-inline-block">Read more <i class="fas fa-arrow-right ml-2"></i></a> -->
        </div>
        <div class="col-md-6 col-lg-auto mt-4 mt-md-0">
          <div class="video-about" onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
            <img width="450px" border-radius="" src="frontend/assets/img/Montage_of_Madiun.jpg" class="img-fluid">
            <!-- <img src="assets/img/about/play-button.png" class="img-fluid play-button"> -->
          </div>
          <!-- <div style="display:none" class="embed-video embed-responsive embed-responsive-1by1">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=dpVOmHK8iWo"
              onmouseout="this.style.display='none'"></iframe>
            <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=dpVOmHK8iWo"
              onmouseout="this.parentElement.previousElementSibling.style.display='block'; this.parentElement.style.display='none'"></iframe>
          </div> -->
          <!-- <div class="video-about d-flex"> -->
          <!-- <div class="embed-responsive embed-responsive-1by1">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UY4Ef5MS7L4?rel=0" allowfullscreen></iframe>
            </div> -->
          <!-- </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir About Us -->

  <!-- Contact -->
  <section class="contact">
    <div class="container">
      <div class="row justify-content-between align-items-center contact-row py-5 py-md-0" id="contact">
        <div class="col-3 col-md-5 d-none d-md-block">
          <img src="Backend/assets/img-wisata/malioboromadiun.jpeg" class="img-fluid">
        </div>
        <div class="col-10 col-md-6 col-xl-5">
          <h1 class="mb-3"><span>Contact</span> Us</h1>
          <p class="my-4">Jika Anda memiliki kesulitan, Anda dapat menghubungi kami,
            silahkan isi nomor telepon atau email anda dibawah ini.</p>
          <!-- <div class="input-group mb-4 mb-lg-5">
            <input type="text" class="form-control" placeholder="Enter your Phone or Email">
            <div class="input-group-append">
              <button class="btn btn-contact" type="button" id="button-addon2">Request</button>
            </div>
          </div> -->
          <div class="contact-detail">
            <p><i class="fas fa-map-marker-alt fa-fw mr-3"></i> Jl. Raya Dungus Wungu Kabupaten Madiun</p>
            <p><i class="fas fa-at fa-fw mr-3"></i> krisnadp23@gmail.com</p>
            <p><i class="fas fa-phone-alt fa-fw mr-3"></i> 082257955457</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Contact -->

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