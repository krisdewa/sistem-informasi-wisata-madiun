<?php
    include "../function.php";
    $sql = "SELECT * FROM tbl_testimoni"; //Buat query untuk mengambil data dari database
    $query = mysqli_query($connect,$sql); //Jalankan query
    //
    // Masukkan setiap baris data yang didapat kedalam Array $data
    while ($row = mysqli_fetch_assoc($query)) { // perulangan untuk memasukkan data ke array
        $data[] = $row;
    }
    header('content-type: application/json'); //Deskripsikan jenis isi konten adalah json
    echo json_encode($data); //Tampilkan data yang didapat dari database dengan format json
    mysqli_close($connect); // menutup koneksi





















    
    // $sql = "SELECT * FROM tbl_testimoni ORDER BY id_testimoni";
    // $tampil = mysqli_query($connect,$sql);
    // if (mysqli_num_rows($tampil) > 0) {
    //     $no=1;
    //     $response = array();
    //     $response["data"] = array();
    //     while ($r = mysqli_fetch_array($tampil)) {
    //         $h['id_testimoni'] = $r['id_testimoni'];
    //         $h['namatestimoni'] = $r['namatestimoni'];
    //         $h['komentar'] = $r['komentar'];
    //         $h['dibuat'] = $r['dibuat'];
    //         array_push($response["data"], $h);
    //     }
    //     echo json_encode($response);
    // } else {
    //     $response["message"]="tidak ada data";
    //     echo json_encode($response);
    // }
?>

