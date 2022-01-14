<?php
    include "koneksi.php";
    header('Content-Type: text/xml');
    $query = "SELECT * FROM tbl_wisata";
    $hasil = mysqli_query($con,$query);
    $jumField = mysqli_num_fields($hasil);
    echo "<?xml version='1.0'?>";
    echo "<data>";
    while ($data = mysqli_fetch_array($hasil)) {
        echo "<wisata>";
            echo"<id_wisata>",$data['id_wisata'],"</id_wisata>";
            echo"<kategori>",$data['kategori'],"</kategori>";
            echo"<namawisata>",$data['namawisata'],"</namawisata>";
            echo"<deskripsi>",$data['deskripsi'],"</deskripsi>";
            echo"<alamat>",$data['alamat'],"</alamat>";
            echo"<foto>",$data['foto'],"</foto>";
        echo "</wisata>";
    }
    echo "</data>";
?>