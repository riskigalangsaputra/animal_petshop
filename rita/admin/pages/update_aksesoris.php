<?php
include("koneksi.php");
if (isset($_POST['update'])) {
   $id_barang = $_POST ['id_barang'];
    $nama_barang = $_POST ['nama_barang'];
    $harga = $_POST ['harga'];
 	$stok = $_POST ['stok'];
  	$keterangan = $_POST ['keterangan'];

$sql = "UPDATE barang SET id_barang='$id_barang', nama_barang='$nama_barang', harga='$harga', stok='$stok', keterangan='$keterangan' where id_barang='$id_barang';";

$query = mysqli_query($koneksi,$sql); 
if($query){
echo "Berhasil update data";  
header("location:aksesoris.php");
}
else{
echo 'Gagal';
}
}
?>