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
    $pdf->Cell(190,7,'DATA ADMIN',0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,7,'DATA ADMIN WISATA MADIUN',0,1,'C');
    // Memberikan space kebawah agar tidak terlalu rapat
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(38,6,'NAMA',1,0,'C');
    $pdf->Cell(25,6,'HAK AKSES',1,0,'C');
    $pdf->Cell(40,6,'EMAIL',1,0,'C');
    $pdf->Cell(25,6,'USERNAME',1,0,'C');
    $pdf->Cell(63,6,'PASSWORD',1,1,'C');
    $pdf->SetFont('Arial','',10);
    
    include('../function.php'); //include merupakan salah satu fungsi bawaan PHP untuk memanggil file PHP lain dan menyisipkan semua isi file PHP tersebut.
    $admin = mysqli_query($connect, "SELECT * FROM tbl_admin"); //melakukan query/menampilkan semua data pada table ADMIN

    //mysql_fetch_array() berfungsi untuk menangkap data dari hasil perintah query dan membentuknya ke dalam array asosiatif dan array numerik.
    while ($row = mysqli_fetch_array($admin)){ 
        $pdf->Cell(38,15,$row['nama'],1,0);
        $pdf->Cell(25,15,$row['hak_akses'],1,0,'C');        
        $pdf->Cell(40,15,$row['email'],1,0);
        $pdf->Cell(25,15,$row['username'],1,0);
        $pdf->Cell(63,15,$row['password'],1,1);
    }
    ob_start();
    $pdf->Output(); //berfungsi untuk mengirim PDF ke browser dan memaksa unduhan file dengan nama yang diberikan oleh nama pdf
    ob_end_flush(); 
?>