<?php
include('../function.php');

if(isset($_GET['id_admin'])) {
    $id_admin = $_GET['id_admin'];

    $sql_delete = "DELETE FROM tbl_admin WHERE id_admin = '$id_admin' ";
    mysqli_query($connect, $sql_delete);

    header("Location:../administrator.php");
}