<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
        $nama_toko = $_POST['nama_toko'];
        $alamat = $_POST['alamat'];
        $no_siup =$_POST['no_siup'];
        $nama_pemilik = $_POST['nama_pemilik'];
        $nama_bahan = $_POST['nama_bahan'];
        $satuan = $_POST['satuan'];
        $harga =$_POST['harga'];

        $sql = "INSERT INTO tb_bahan (nama_bahan,satuan,harga)
                VALUES ('$nama_bahan', '$satuan', '$harga')";
        $query = mysqli_query($db,$sql);

        $sql = "SELECT max(id_bahan) AS bahan_id FROM tb_bahan LIMIT 1";
        $query = mysqli_query($db,$sql);

        $data = mysqli_fetch_array($query);
        $bahan_id = $data['bahan_id'];

        $sql = "INSERT INTO tb_toko (id_bahan,nama_toko,alamat,no_siup,nama_pemilik)
                VALUES ('$bahan_id', '$nama_toko', '$alamat', '$no_siup', '$nama_pemilik')";
        $query = mysqli_query($db,$sql);

if($query){
    header('location:data.php?status=sukses');
}else{
    header('location:tambah.php?status=gagal');
}
}

?>