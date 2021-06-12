<?php
include("koneksi.php");
if (isset($_POST['update'])) {
   $id_layanan = $_POST ['id_layanan'];
    $nama_layanan = $_POST ['nama_layanan'];
    $keterangan = $_POST ['keterangan'];
    
$sql = "UPDATE petshop SET id_layanan='$id_layanan', nama_layanan='$nama_layanan', keterangan='$keterangan' where id_layanan='$id_layanan';";

$query = mysqli_query($koneksi,$sql); 
if($query){
echo "Berhasil update data";  
header("location:petshop.php");
}
else{
echo 'Gagal';
}
}
?>