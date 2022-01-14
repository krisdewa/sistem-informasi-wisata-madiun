<?php   
    session_start();
    include('function.php');
    login();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Wisata</title>

    <!-- Custom fonts for this template -->
    <link href="resource/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="resource/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="resource/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- ICON BOOSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text xs-3"> Wisata Madiun<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>
            
            <!-- WISATA Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="wisata.php">
                    <i class="fas fa-fw fa-paper-plane"></i>
                    <span> Data Wisata</span></a>
            </li>

            <!-- WISATA Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="testimoni.php">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Data Testimoni</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Heading -->
            <div class="sidebar-heading">
                Setting
            </div>

            <!-- AKUN Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="administrator.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span> Data Admin</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <!-- <span class="badge badge-danger badge-counter">3+</span> -->
                            </a>
                            <!-- Dropdown - Alerts -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div> -->
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <!-- <span class="badge badge-danger badge-counter">7</span> -->
                            </a>
                            <!-- Dropdown - Messages -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div> -->
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nama']; ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="administrator.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Wisata</h1>
                    <p class="mb-4"> Menampilkan data wisata yang ada pada website <a target="_blank"
                            href="../galeri.php" target="_blank">Wisata Madiun</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List Wisata</h6>
                        </div>
                        
                        <div class="card-body">
                        
                            <!-- TOMBOL TAMBAH -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <button class="btn btn-primary" type="button" href="#" data-toggle="modal" data-target="#tambahwisata"><i class="fas fa-fw fa-plus"></i> Tambah Data </button> 
                                <a href="cetak_pdf/cetak_wisata.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-download fa-sm text-white-50"></i> Cetak Data</a>
                            </div>
                            <!-- <a href="cetak_wisata.php"> <button class="btn btn-primary" type="button" href="#"> Cetak Data </button> </a> <br><br> -->
                            
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID Wisata</th>
                                            <th>Kategori</th>
                                            <th>Nama Wisata</th>
                                            <th>Deskripsi</th>
                                            <th>Alamat</th>
                                            <th>Foto</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID Wisata</th>
                                            <th>ID Kategori</th>
                                            <th>Nama Wisata</th>
                                            <th>Deskripsi</th>
                                            <th>Alamat</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <?php 
                                            $data = mysqli_query($connect, "SELECT * FROM tbl_wisata");
                                            
                                            $awal=0;
                                            $no = $awal + 1;

                                            while($wisata = mysqli_fetch_array($data)) { 
                                        ?>
                                        <tr>
                                            <td> <?= $no++ ?></td>
                                            <td> <?= $wisata['id_wisata'] ?></td>
                                            <td> <?= $wisata['kategori'] ?></td>
                                            <td> <?= $wisata['namawisata'] ?></td>
                                            <td> <?php echo substr($wisata['deskripsi'], 0, 300) ?>...</td>
                                            <td> <?= $wisata['alamat'] ?></td>

                                            <td> 
                                                <img src="foto/<?php echo $wisata['foto'] ?>" width="100"><br>
                                                <center><a class="btn btn-warning btn-sm btn-block" data-toggle="modal" data-target="#editfoto<?php echo $wisata['id_wisata']?>" ><i class="bi bi-pencil"></i> edit</a></center>
                                            </td>

                                            <td>
                                                <a class="btn btn-warning" data-toggle="modal" data-target="#editwisata<?php echo $wisata['id_wisata']?>" ><i class="bi bi-pencil"></i></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus ?')" href="config/hapus_wisata.php?id_wisata=<?=$wisata['id_wisata'];?>"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>

                                        <!-- MODAL EDIT DATA -->
                                        <div class="modal fade" id="editwisata<?php echo $wisata['id_wisata']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="fw-bolder modal-title" id="exampleModalLabel">Edit Data Wisata</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="function.php" method="POST" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="tambahid">ID Wisata</label>
                                                                        <input type="number" class="form-control" name="id_wisata" placeholder="" value="<?php echo $wisata['id_wisata'];?>" readonly>
                                                                    </div>
                                                                    <!-- <div class="form-group col-md-6">
                                                                        <label for="tambahidkategori">Kategori</label>
                                                                        <input type="text" class="form-control"  name="kategori" placeholder="" value="<?php echo $wisata['kategori'];?>">
                                                                    </div> -->
                                                                    <div class="form-group col-md-6">
                                                                        <label for="tambahkategori">Kategori</label>
                                                                        <select class="form-control" name="kategori" placeholder="Otomatis System">
                                                                            <option value="<?php echo $wisata['kategori'];?>"> <?php echo $wisata['kategori'];?></option>
                                                                            <option value="Wisata Alam">Wisata Alam</option>
                                                                            <option value="Wisata Religi">Wisata Religi</option>
                                                                            <option value="Wisata Sejarah">Wisata Sejarah</option>
                                                                            <option value="Wisata keluarga">Wisata Keluarga</option>
                                                                            <option value="Wisata Budaya">Wisata Budaya</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <label for="tambahwisata">Nama Wisata</label>
                                                                        <input type="text" class="form-control" name="namawisata" placeholder="" value="<?php echo $wisata['namawisata'];?>">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label for="tambahalamat">Alamat</label>
                                                                        <input type="text" class="form-control" name="alamat" placeholder="" value="<?php echo $wisata['alamat'];?>">
                                                                    </div>
                                                                    <!-- <div class="form-group col-md-12">
                                                                        <label for="">Upload Foto</label>
                                                                        <label class="" type="text" name="foto"><?//= $wisata['foto'];?></label>
                                                                        <input type="file" class="form-control" name="foto" placeholder="" value="<?php echo $wisata['foto'];?>">
                                                                    </div> -->
                                                                    <div class="form-group col-md-12">
                                                                        <label for="tambahdeskripsi">Deskripsi</label>
                                                                        <!-- <input type="number" class="form-control" name="harga_beli" placeholder=""> -->
                                                                        <textarea rows="7" class="form-control" name="deskripsi" value=""> <?php echo htmlspecialchars($wisata['deskripsi']); ?> </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" name="editdatawisata" class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- END MODAL EDIT DATA -->
                                        
                                        <!-- MODAL EDIT FOTO -->
                                        <div class="modal fade" id="editfoto<?php echo $wisata['id_wisata']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="fw-bolder modal-title" id="exampleModalLabel">Edit Foto</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="function.php" method="POST" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                        <!-- <label for="tambahid">ID Wisata</label> -->
                                                                        <input type="number" class="form-control" name="id_wisata" placeholder="" value="<?php echo $wisata['id_wisata'];?>" hidden>
                                                                    </div>
                                                                <div class="form-group col-md-12">
                                                                    <center><img src="foto/<?php echo $wisata['foto'] ?>" width="200"><br><br></center>
                                                                    <label for="">Foto : </label>
                                                                    <label class="" type="text" name="foto"><?= $wisata['foto'];?></label>
                                                                    <input type="file" class="form-control" name="foto" placeholder="" value="<?php echo $wisata['foto'];?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" name="editfoto" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END MODAL EDIT FOTO -->
                                        <?php } ?>
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <a href="https://krisdewa.my.id" target="_blank">Krisna Dewa Pratama </a>2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    
    <!-- MODAL TAMBAH DATA -->
    <div class="modal fade" id="tambahwisata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bolder modal-title" id="exampleModalLabel">Tambah Data Wisata</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="function.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="tambahid">ID Wisata</label>
                                <input type="" class="form-control"  name="id_wisata" placeholder="Otomatis System" readonly>
                            </div>
                            <!-- <div class="form-group col-md-6">
                                <label for="tambahidkategori">Kategori</label>
                                <input type="text" class="form-control"  name="kategori" placeholder="">
                            </div> -->
                            <div class="form-group col-md-6">
                                <label for="tambahkategori">Kategori</label>
                                <select class="form-control" name="kategori" placeholder="Otomatis System">
                                    <option value=""> -- Pilih Kategori --</option>
                                    <option value="Wisata Alam">Wisata Alam</option>
                                    <option value="Wisata Religi">Wisata Religi</option>
                                    <option value="Wisata Sejarah">Wisata Sejarah</option>
                                    <option value="Wisata keluarga">Wisata Keluarga</option>
                                    <option value="Wisata Budaya">Wisata Budaya</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="tambahwisata">Nama Wisata</label>
                                <input type="text" class="form-control" name="namawisata" placeholder="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="tambahalamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Upload Foto</label>
                                <input type="file" class="form-control" name="foto" placeholder="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="tambahdeskripsi">Deskripsi</label>
                                <!-- <input type="number" class="form-control" name="harga_beli" placeholder=""> -->
                                <textarea rows="7" class="form-control" name="deskripsi"></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="tambahdatawisata" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL TAMBAH DATA -->

   
    
    
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda yakin mau Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan pilih "Logout" jika ingin keluar <br> pilih Cancel untuk membatalkan</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="auth-logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="resource/vendor/jquery/jquery.min.js"></script>
    <script src="resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="resource/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="resource/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="resource/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="resource/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="resource/js/demo/datatables-demo.js"></script>

</body>

</html>