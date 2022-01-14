<?php
    // memanggil library FPDF
    require('fpdf/fpdf.php');
    // intance object dan memberikan pengaturan halaman PDF
    $pdf = new FPDF('l','mm','A5');
    // membuat halaman baru
    $pdf->AddPage();
    // SETTING jenis font yang akan digunakan
    // DISINI MENGGUNAKAN FONT ARIAL dengan ukuran 16
    $pdf->SetFont('Arial','B',16);

    // MENCETAK STRING
    $pdf->Cell(190,7,'DATA WISATA',0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,7,'DATA WISATA MADIUN',0,1,'C');
    // Memberikan space kebawah agar tidak terlalu rapat
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B',10);
    // $pdf->Cell(25,6,'ID_WISATA',1,0);
    $pdf->Cell(55,6,'NAMA WISATA',1,0,'C');
    $pdf->Cell(30,6,'KATEGORI',1,0,'C');
    // $pdf->Cell(50,6,'DESKRIPSI',1,0,'C');
    $pdf->Cell(90,6,'ALAMAT',1,1,'C');
    // $pdf->Cell(30,6,'FOTO',1,1,'C');
    $pdf->SetFont('Arial','',10);
    
    include('../function.php'); //include merupakan salah satu fungsi bawaan PHP untuk memanggil file PHP lain dan menyisipkan semua isi file PHP tersebut.
    $data = mysqli_query($connect, "SELECT * FROM tbl_wisata"); //melakukan query/menampilkan semua data pada table wisata

    //mysql_fetch_array() berfungsi untuk menangkap data dari hasil perintah query dan membentuknya ke dalam array asosiatif dan array numerik.
    while ($row = mysqli_fetch_array($data)){ 
        // $pdf->Cell(20,6,$row['id_wisata'],1,0);
        $pdf->Cell(55,15,$row['namawisata'],1,0);
        $pdf->Cell(30,15,$row['kategori'],1,0,'C');        
        // $pdf->Cell(50,15,$row['deskripsi'],1,0,);
        $pdf->Cell(90,15,$row['alamat'],1,1);
        // $pdf->Cell(30,15,$row['foto'],1,1);
    }
    ob_start();
    $pdf->Output(); //berfungsi untuk mengirim PDF ke browser dan memaksa unduhan file dengan nama yang diberikan oleh nama pdf
?>