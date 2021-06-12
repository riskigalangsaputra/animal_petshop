<?php
include("koneksi.php");
if (isset($_POST['update'])) {
    $id_pemesanan = $_POST['id_pemesanan'];
     $tgl_pengiriman= $_POST['tgl_pengiriman'];
      $status = $_POST['status'];
    $no_resi = $_POST['no_resi'];
  

$sql = "UPDATE pemesanan SET tgl_pengiriman='$tgl_pengiriman', status='$status', no_resi='$no_resi' where id_pemesanan='$id_pemesanan';";

$query = mysqli_query($koneksi,$sql); 
if($query){
echo "Berhasil update data";  
header("location:pengiriman.php");
}
else{
echo 'Gagal';
}
}
?>