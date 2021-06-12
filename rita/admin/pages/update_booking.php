<?php
include("koneksi.php");
if (isset($_POST['update'])) {
   $id_booking = $_POST ['id_barang'];
    $nama = $_POST ['nama'];
    $telepon = $_POST ['telepon'];
 	$email = $_POST ['email'];
  	$alamat = $_POST ['alamat'];
  	$tgl_booking = $_POST ['tgl_booking'];
  	$nama_layanan = $_POST ['nama_layanan'];
  	$jenis_hewan = $_POST ['jenis_hewan'];
$sql = "UPDATE booking_layanan SET id_booking='$id_booking', nama='$nama', telepon='$telepon', email='$email', alamat='$alamat', tgl_booking='$tgl_booking', nama_layanan='$nama_layanan', jenis_hewan='$jenis_hewan'  where id_booking='$id_booking';";

$query = mysqli_query($koneksi,$sql); 
if($query){
echo "Berhasil update data";  
header("location:grooming.php");
}
else{
echo 'Gagal';
}
}
?>