<?php
include("koneksi.php");
if(isset($_POST['edit'])){
        $id = $_POST['id_toko'];
        $nama_toko = $_POST['nama_toko'];
        $alamat = $_POST['alamat'];
        $no_siup =$_POST['no_siup'];
        $nama_pemilik = $_POST['nama_pemilik'];
        $nama_bahan = $_POST['nama_bahan'];
        $satuan = $_POST['satuan'];
        $harga =$_POST['harga'];

        $sql = "UPDATE tb_toko SET nama_toko='$nama_toko', alamat='$alamat', no_siup='$no_siup', nama_pemilik='$nama_pemilik' WHERE id_toko='$id'";
        $query = mysqli_query($db,$sql);

        $sql = "UPDATE tb_bahan SET nama_bahan='$nama_bahan', satuan='$satuan', harga='$harga' WHERE id_bahan='$id'";
        $query = mysqli_query($db,$sql);

        if($query){
            header('location:data.php?status=sukses');
        }else{
            header('location:edit.php?status=gagal');
        }
}
?>