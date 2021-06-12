<?php
include "koneksi.php";
	
    $nama = $_POST ['nama'];
    $email = $_POST ['email'];
    $subject = $_POST ['subject'];
    $message= $_POST ['message'];
    
if (empty($nama)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=contact-us.php'>";
}else
if (empty($email)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=contact-us.php'>";
}else 
if(empty($subject)){
echo "<script>alert('subject belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=contact-us.php'>";
}else 
if(empty($message)){
echo "<script>alert('message belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=contact-us.php'>";
}else{
$sql ="INSERT INTO pesan (nama,email,subject,message) values ('$nama','$email','$subject','$message')";
$pesan = mysqli_query($koneksi,$sql); 
if ($pesan){
echo "<script>alert('Berhasil Mengirimkan Kritik dan Saran')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{
echo "<script>alert('Gagal Mengirimkan Kritik dan Saran')</script>";
echo "<meta http-equiv='refresh' content='1 url=contact-us.php'>";
}
}
?>

