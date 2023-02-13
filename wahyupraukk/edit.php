<?php
include("koneksi.php");
if(!isset($_GET['id_toko'])){
    header('location:data.php');
}

$id_toko = $_GET['id_toko'];
$sql = "SELECT * FROM tb_toko INNER JOIN tb_bahan ON tb_toko.id_bahan = tb_bahan.id_bahan WHERE tb_toko.id_toko='$id_toko'";
$query = mysqli_query($db,$sql);
$data = mysqli_fetch_array($query)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <center>
        <h1>Tambah Data</h1> <tr>
                <td><input type="hidden" name="id_toko" value="<?php echo $data['id_toko'];?>"></td>
            </tr>
        <table border="3">
        <form action="proses_edit.php" method="POST">
        <tr>
                    <td><label for="nama_toko">Nama Toko</label></td>
                    <td><input type="text" name="nama_toko" value="<?php echo $data['nama_toko'];?>"></td>
                </tr><tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>"></td>
                </tr><tr>
                    <td><label for="no_siup">No Siup</label></td>
                    <td><input type="text" name="no_siup" value="<?php echo $data['no_siup'];?>"></td>
                </tr><tr>
                    <td><label for="nama_pemilik">Nama Pemilik</label></td>
                    <td><input type="text" name="nama_pemilik" value="<?php echo $data['nama_pemilik'];?>"></td>
                </tr><tr>
                    <td><label for="nama_bahan">Nama Bahan</label></td>
                    <td><input type="text" name="nama_bahan" value="<?php echo $data['nama_bahan'];?>"></td>
                </tr><tr>
                    <td><label for="satuan">Satuan</label></td>
                    <td><input type="number" name="satuan" value="<?php echo $data['satuan'];?>"></td>
                </tr><tr>
                    <td><label for="harga">Harga</label></td>
                    <td><input type="text" name="harga" value="<?php echo $data['harga'];?>"></td>
                </tr>
</table><p>
            <td><a href="data.php"><input type="button" value="KEMBALI"/></a></td>
            <td><input type="submit" value="EDIT" name="edit"/></td>
</form>
    </center>
</body>
</html>