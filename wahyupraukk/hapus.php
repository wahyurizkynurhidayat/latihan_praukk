<?php
include("koneksi.php");

$id_toko = $_GET['id_toko'];

mysqli_query($db,"DELETE FROM tb_toko WHERE id_toko='$id_toko'");
mysqli_query($db,"DELETE FROM tb_bahan WHERE id_bahan='$id_toko'");

if($query){
    header('location:data.php?status=sukses');
}else{
    header('location:data.php?status=gagal');
}

?>