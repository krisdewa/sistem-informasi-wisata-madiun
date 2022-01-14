<?php
include('../function.php');

// DELETE WISATA
if(isset($_GET['id_wisata'])) {
    $id_wisata = $_GET['id_wisata'];

    $sql_delete = "DELETE FROM tbl_wisata WHERE id_wisata = '$id_wisata' ";
    mysqli_query($connect, $sql_delete);

    header("Location:../wisata.php");
}
?>