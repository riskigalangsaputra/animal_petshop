<?php
include "koneksi.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];

if(empty($email)){
		echo "<script>alert('Email belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else{
		if (empty($nama)){
				echo "<script>alert('Nama belum diisi')</script>";
				echo "<meta http-equiv='refresh' content='1 url=login.php'>";
		}elseif(empty($telepon)){
				echo "<script>alert('Telepon belum diisi')</script>";
				echo "<meta http-equiv='refresh' content='1 url=login.php'>";
		}elseif(empty($alamat)){
				echo "<script>alert('Alamat belum diisi')</script>";
				echo "<meta http-equiv='refresh' content='1 url=login.php'>";
		}elseif(empty($password)){
				echo "<script>alert('Password belum diisi')</script>";
				echo "<meta http-equiv='refresh' content='1 url=login.php'>";
		}else{

			//ini cek emailnya sudah digunakan atau belum
			$user_check = mysqli_num_rows(mysqli_query ($koneksi, "select * from daftar where email = '$email'"));
			if ($user_check > 0){
			
					echo "<script>alert('Gagal Mendaftar, Email sudah digunakan!')</script>";
					echo "<meta http-equiv='refresh' content='1 url=login.php'>";

			}else{

				$sql ="INSERT INTO daftar (nama,email,telepon,alamat,password) values('$nama','$email','$telepon','$alamat','$password')";
				$daftar = mysqli_query($koneksi,$sql); 
				
				if($daftar){
						echo "<script>alert('Berhasil Mendaftar')</script>";
						echo "<meta http-equiv='refresh' content='1 url=index.php'>";
				}else{
						echo "<script>alert('Gagal Mendaftar')</script>";
						echo "<meta http-equiv='refresh' content='1 url=login.php'>";
				}
			}
		}
}

?>