<?php
  // code A

    include ('koneksi.php');
  // end of code A
   
  // code B

    $nama_layanan = $_POST ['nama_layanan'];
    $keterangan = $_POST ['keterangan'];
   
  $nama_foto = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path =  $_SERVER['DOCUMENT_ROOT'].'/ADMIN/pages/gambar/'.$nama_foto;   //directory tidak mau terbaca
chown($path, 0755);

if (empty($nama_layanan)){
echo "<script>alert('Nama layanan belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=tambah.php'>";
}else
if (empty($keterangan)){
echo "<script>alert('keterangan belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=tambah.php'>";
}else
{
$sql ="INSERT INTO petshop (nama_layanan, keterangan, gambar) 
values ('$nama_layanan','$keterangan','$nama_foto')";
$daftar = mysqli_query($koneksi,$sql); 
move_uploaded_file($tmp_file, $path);
if ($daftar){
echo "<script>alert('Berhasil Menambah Data Petshop')</script>";
echo "<meta http-equiv='refresh' content='1 url=petshop.php'>";
}else{
echo "<script>alert('Gagal Menambah Data Petshop')</script>";
echo "<meta http-equiv='refresh' content='1 url=petshop.php'>";
}
}

?>