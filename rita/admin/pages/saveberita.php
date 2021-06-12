<?php
include "koneksi.php";
$judul_berita = $_POST['judul_berita'];
$keterangan = $_POST['keterangan'];
$nama_foto = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path =  $_SERVER['DOCUMENT_ROOT'].'/ADMIN/pages/gambar/'.$nama_foto;   //directory tidak mau terbaca
chown($path, 0755);

if (empty($judul_berita)){
echo "<script>alert('NIP belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($keterangan)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
$sql ="INSERT INTO berita (judul_berita, keterangan, gambar) values ('$judul_berita','$keterangan','$nama_foto')";
$daftar = mysqli_query($koneksi,$sql); 
move_uploaded_file($tmp_file, $path);
if ($daftar){
echo "<script>alert('Berhasil Menambah data berita')</script>";
echo "<meta http-equiv='refresh' content='5 url=berita.php'>";
}else{
echo "<script>alert('Gagal Menambah data berita')</script>";
echo "<meta http-equiv='refresh' content='5 url=berita.php'>";
}
}

?>