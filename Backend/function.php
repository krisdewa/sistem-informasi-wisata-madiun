<?php
// KONEKSI DATABASE
include 'config/configDB.php';
$connect = mysqli_connect(DB_SERVER, DB_UID, DB_PASSWORD, DB_NAME);
if(!$connect){
    echo "Database tidak terkoneksi";
}
// ====================================================================== //

// var_dump($_POST);

// ====================================================================== //
// UNTUK WAJIB AUTHENTICATION SEBELUM MENGAKSES WEB
function login() {
    if(empty($_SESSION['username'])){
        header('location: auth-login.php');
    }
}
// ====================================================================== //

// PROSES LOGIN
if(isset($_POST['login'])) {
    $secret = "6Le1Jn8dAAAAAFJ7ILm1vclTQAVFO3PUp1ivwgsM";
    $url = "https://www.google.com/recaptcha/api/siteverify";

    $verify = file_get_contents($url.'?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verify);

    if ($responseData->success == true){    
        // menangkap data yang dikirim dari form login 
        // With Filter 
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = filter_var(md5($_POST['password']), FILTER_SANITIZE_STRING);
        // menyeleksi data user dengan username dan password yang sesuai
        $login = mysqli_query($connect,"SELECT * FROM tbl_admin WHERE
                                                (username = '$username' OR email = '$username') AND password='$password'");
        $cek = mysqli_num_rows($login); // menghitung jumlah data yang ditemukan
        if($cek > 0){ // cek apakah username dan password di temukan pada database
            // $cek = mysqli_fetch_assoc($login);
            // mengaktifkan session pada php
            session_start();
            $qry = mysqli_fetch_array($login);
            // $_SESSION['username'] = $username;
            $_SESSION['id_admin'] = $qry['id_admin'];
            $_SESSION['username'] = $qry['username'];
            $_SESSION['hak_akses']= $qry['hak_akses'];
            $_SESSION['nama']     = $qry['nama'];
            header("location:index.php");
        }else{
            echo "<script> alert('Email atau password anda salah !!!'); </script>";
            echo "<script> location='auth-login.php'; </script>";
        }
    } else {
        echo "<script> alert('Captcha Salah atau belum diisi !!!'); </script>";
        echo "<script> location='auth-login.php'; </script>";
    }
}

// // REGISTER AKUN
// if(isset($_POST['register'])) {
//     // $id_admin = $_POST['id_admin'];
//     $nama = $_POST['nama'];
//     $email = $_POST['email'];
//     $username = $_POST['username'];
//     $password = md5($_POST['password']);
    
//     $sql = mysqli_query($connect,"SELECT * FROM tbl_admin where email='$email'");
//     $sqlnama = mysqli_query($connect,"SELECT * FROM tbl_admin where nama='$nama'");
//     $sqlun = mysqli_query($connect,"SELECT * FROM tbl_admin where username='$username'");
    
//     if(mysqli_num_rows( $sql ) > 0){
//         header("Location:auth-register.php?error=email sudah digunakan");
//         exit;
//     } elseif(mysqli_num_rows($sqlnama) > 0){
//         header("Location:auth-register.php?error=nama sudah digunakan");
//         exit;
//     } elseif(mysqli_num_rows($sqlun) > 0){
//         // echo "<script> alert('username sudah digunakan !!!'); </script>";
//         header("Location:auth-register.php?error=username sudah digunakan");
//         exit;
//     } else {
//         $sql_insert = "INSERT INTO tbl_admin VALUES('$id_admin','$nama','$email','$username', '$password')";
//         mysqli_query($connect, $sql_insert);
//         header("Location:auth-login.php");
//     }

// }

// PROSES TAMBAH DATA PADA TABLE WISATA
if(isset($_POST['tambahdatawisata'])) {

    // var_dump($_POST);

    $id_wisata = filter_var($_POST['id_wisata'], FILTER_SANITIZE_STRING);
    $kategori = filter_var($_POST['kategori'], FILTER_SANITIZE_STRING); 
    $namawisata = filter_var($_POST['namawisata'], FILTER_SANITIZE_STRING);
    $alamat = filter_var($_POST['alamat'], FILTER_SANITIZE_STRING);
    // $foto = $_POST['foto'];
    $deskripsi = $_POST['deskripsi'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif','webp');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext,$ekstensi) ) {
        echo "<script> alert('Ekstensi tidak sesuai !!!'); </script>";
        echo "<script> location='wisata.php'; </script>";
    }else{
        if($ukuran < 1044070){		
            $foto = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$rand.'_'.$filename);

            $sql_insert = "INSERT INTO tbl_wisata VALUES('$id_wisata', '$kategori', '$namawisata', '$deskripsi','$alamat', '$foto')";
            mysqli_query($connect, $sql_insert);

            echo "<script> alert('Berhasil Menambahkan Data !!!'); </script>";
            echo "<script> location='wisata.php'; </script>";

        }else{
            echo "<script> alert('Ukuran terlalu besar !!!'); </script>";
            echo "<script> location='wisata.php'; </script>";
        }
    }

    // header("location:wisata.php");
}


///////////////////////////////////////
// EDIT DATA WISATA
if(isset($_POST['editdatawisata'])) {
    $id_wisata = $_POST['id_wisata'];
    $kategori = filter_var($_POST['kategori'], FILTER_SANITIZE_STRING);
    $namawisata = filter_var($_POST['namawisata'], FILTER_SANITIZE_STRING);
    $alamat = filter_var($_POST['alamat'], FILTER_SANITIZE_STRING);
    // $foto = $_POST['foto'];
    $deskripsi = $_POST['deskripsi'];

    $sql_edit = "UPDATE tbl_wisata SET namawisata = '$namawisata', kategori = '$kategori', deskripsi = '$deskripsi', alamat = '$alamat' WHERE id_wisata = '$id_wisata' ";
    mysqli_query($connect, $sql_edit);

    echo "<script> alert('Berhasil Mengubah Data !!!'); </script>";

    header("Location:wisata.php");
}

// 
// EDIT FOTO WISATA
if(isset($_POST['editfoto'])) {
    $id_wisata = $_POST['id_wisata'];
    $foto = $_POST['foto'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif','webp');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext,$ekstensi) ) {
        echo "<script> alert('Ekstensi tidak sesuai !!!'); </script>";
        echo "<script> location='wisata.php'; </script>";
    }else{
        if($ukuran < 1044070){		
            $foto = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$rand.'_'.$filename);

            $sql_edit = "UPDATE tbl_wisata SET foto = '$foto' WHERE id_wisata = '$id_wisata' ";
            mysqli_query($connect, $sql_edit);

            echo "<script> alert('Berhasil Mengubah Foto !!!'); </script>";
            echo "<script> location='wisata.php'; </script>";

        }else{
            echo "<script> alert('Ukuran terlalu besar !!!'); </script>";
            echo "<script> location='wisata.php'; </script>";
        }
    }
    // header("Location:wisata.php");
}

////////////////////////////////////

// // Buat AKUN
if(isset($_POST['tambahakun'])) {
    $id_admin = $_POST['id_admin'];
    $hak_akses = filter_var($_POST['hak_akses'], FILTER_SANITIZE_STRING);
    $nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = md5($_POST['password']);
    
    $sql = mysqli_query($connect,"SELECT * FROM tbl_admin where email='$email'");
    $sqlnama = mysqli_query($connect,"SELECT * FROM tbl_admin where nama='$nama'");
    $sqlun = mysqli_query($connect,"SELECT * FROM tbl_admin where username='$username'");
    
    if(mysqli_num_rows( $sql ) > 0){
        // header("Location:akun.php?error=email sudah digunakan");
        echo '<script>
                alert("Alamat email sudah digunakan !!!");history.go(-1);
                window.location.href="administrator.php";
            </script>';
        exit;
    } elseif(mysqli_num_rows($sqlnama) > 0){
        echo '<script>
                alert("Nama sudah digunakan !!!");
                window.location.href="administrator.php";
            </script>';
        exit;
    } elseif(mysqli_num_rows($sqlun) > 0){
        echo '<script> alert("username sudah digunakan !!!"); </script>';
        header("Location:administrator.php");
        exit;
    } else {
        $sql_insert = "INSERT INTO tbl_admin VALUES('$id_admin', '$hak_akses','$nama','$email','$username', '$password')";
        mysqli_query($connect, $sql_insert);
        header("Location:administrator.php");
    }

}

// var_dump($_POST);

// EDIT DATA akun
if(isset($_POST['editdataakun'])) {
    $id_admin = $_POST['id_admin'];
    $hak_akses = filter_var($_POST['hak_akses'], FILTER_SANITIZE_STRING);
    $nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = md5($_POST['password']);

    $sql_edit = "UPDATE tbl_admin SET hak_akses ='$hak_akses', nama = '$nama', email = '$email', username = '$username', password = '$password' WHERE id_admin = '$id_admin' ";
    mysqli_query($connect, $sql_edit);

    echo "<script> alert('Berhasil Mengubah Data akun !!!'); </script>";

    header("Location:administrator.php");
    // var_dump($_POST);
}

// var_dump($_POST);
if(isset($_POST['tambahdatatestimoni'])) {
    $id_testimoni = $_POST['id_testimoni'];
    $namatestimoni = filter_var($_POST['namatestimoni'], FILTER_SANITIZE_STRING);
    $wisata = filter_var($_POST['wisata'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $komentar = filter_var($_POST['komentar'], FILTER_SANITIZE_STRING);
    $dibuat = date("Y-m-d h:i:sa");
    
    $sql = mysqli_query($connect,"SELECT * FROM tbl_testimoni WHERE namatestimoni='$namatestimoni' AND wisata='$wisata'");
    
    if(mysqli_num_rows( $sql ) > 0){
        echo '<script>
                alert("Anda sudah Komentar");history.go(-1);
                window.location.href="Location:../galeri.php";
            </script>';
        exit;
    } else {
        $sql_insert = "INSERT INTO tbl_testimoni VALUES('$id_testimoni', '$wisata','$email','$namatestimoni','$komentar','$dibuat')";
        mysqli_query($connect, $sql_insert);
        header("Location:../galeri.php");
        }

}


?>