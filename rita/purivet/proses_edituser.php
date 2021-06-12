
<?php
include("koneksi.php");
if (isset($_POST['update'])) {
   $id = $_POST ['id'];
    $nama = $_POST ['nama'];
    $email = $_POST ['email'];
 	$telepon = $_POST ['telepon'];
  	$alamat = $_POST ['alamat'];
  	$password = $_POST ['password'];
	$sql = "UPDATE daftar SET id='$id', nama='$nama', email='$email', telepon='$telepon', alamat='$alamat', password='$password' where id='$id';";

$query = mysqli_query($koneksi,$sql); 
if($query){
echo "Berhasil update data";  
header("location:profill.php");
}
else{
echo 'Gagal';
}
}
?>