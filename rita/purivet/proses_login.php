<?php
include "koneksi.php";
$email = $_POST['email'];
$password = $_POST['password'];
if (empty($email)){
echo "<script>alert('email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else{
session_start();
$sql = "select * from daftar where email='$email' and password='$password'";
$admin = "select * from admin where email='$email' and password='$password'";
$login = mysqli_query($koneksi,$sql); 
$loginadmin = mysqli_query($koneksi,$admin); 
if (mysqli_num_rows($login) > 0){
$_SESSION['id'] = $id;	
$_SESSION['email'] = $email;
$sql = "select * from daftar where email='$email' and password='$password'";
$query=mysqli_query($koneksi,$sql);
while ($data=mysqli_fetch_assoc($query)) {
	$_SESSION['id']=$data['id'];
	$_SESSION['alamat']=$data['alamat'];
	$_SESSION['tlp']=$data['telepon'];
	$_SESSION['nama']=$data['nama'];
	# code...
}
$_SESSION['password'] = $password;
$_SESSION['ini_admin'] = false;
header("location:index.php");
}
else if (mysqli_num_rows($loginadmin) > 0){
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION['ini_admin'] = true;
header("location: ../admin/pages/index.php");

}
else{
echo "<script>alert('Nama atau Password salah')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}
}

?>

