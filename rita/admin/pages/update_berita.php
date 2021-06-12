<?php
include("koneksi.php");
if (isset($_POST['update'])) {
    $id_berita = $_POST['id_berita'];
      $judul_berita = $_POST['judul_berita'];
     $keterangan = $_POST['keterangan'];
  

$sql = "UPDATE berita SET id_berita='$id_berita', judul_berita='$judul_berita', keterangan='$keterangan' where id_berita='$id_berita';";

$query = mysqli_query($koneksi,$sql); 
if($query){
echo "Berhasil update data";  
header("location:berita.php");
}
else{
echo 'Gagal';
}
}
?>