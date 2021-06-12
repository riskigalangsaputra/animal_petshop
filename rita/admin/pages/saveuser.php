<?php


    include ('koneksi.php');

    $nama = $_POST ['nama'];
    $email = $_POST['email'];
	$telepon = $_POST['telepon'];
	$alamat = $_POST['alamat'];
	$password = $_POST['password'];
  

if (empty($nama)){
echo "<script>alert('Nama layanan belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=tambahuser.php'>";
}else
if (empty($email)){
echo "<script>alert('keterangan belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=tambahuser.php'>";
}else
{
$sql ="INSERT INTO daftar (nama, email, telepon, alamat, password) 
VALUES ('$nama', '$email', '$telepon', '$alamat', '$password' )";
$daftar = mysqli_query($koneksi,$sql); 
if ($daftar){
echo "<script>alert('Berhasil Menambah Data Pelanggan')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{
echo "<script>alert('Gagal Menambah Data Pelanggan')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}
}

?>



















