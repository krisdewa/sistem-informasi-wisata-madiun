<?php
    include "../function.php";
    $sql = "SELECT * FROM tbl_wisata ORDER BY id_wisata";
    $tampil = mysqli_query($connect,$sql);
    if (mysqli_num_rows($tampil) > 0) {
        $no=1;
        $response = array();
        $response["data"] = array();
        while ($r = mysqli_fetch_array($tampil)) {
            $h['id_wisata'] = $r['id_wisata'];
            $h['kategori'] = $r['kategori'];
            $h['namawisata'] = $r['namawisata'];
            $h['deskripsi'] = $r['deskripsi'];
            $h['alamat'] = $r['alamat'];
            $h['foto'] = $r['foto'];
            array_push($response["data"], $h);
        }
        echo json_encode($response);
    } else {
        $response["message"]="tidak ada data";
        echo json_encode($response);
    }
?>

