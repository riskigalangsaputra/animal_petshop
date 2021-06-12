<?php
  // code A

    include ('koneksi.php');
  // end of code A
   
  // code B
    $nama_barang = $_POST ['nama_barang'];
    $jenis_barang = $_POST ['jenis_barang'];
    $kategori = $_POST ['kategori'];
    $stok = $_POST ['stok'];
    $harga = $_POST ['harga'];
    $keterangan = $_POST ['keterangan'];
    $nama_foto = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path =  $_SERVER['DOCUMENT_ROOT'].'/ADMIN/pages/gambar/'.$nama_foto;   //directory tidak mau terbaca
chown($path, 0755);

if (empty($nama_barang)){
echo "<script>alert('Nama Produk belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($jenis_barang)){
echo "<script>alert('jenis barang belum diisi')</script>";
echo "<meta http-equiv='refresh' content='5 url=daftar.php'>";
}else
if (empty($kategori)){
echo "<script>alert('kategori belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($stok)){
echo "<script>alert('stok belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($harga)){
echo "<script>alert('harga belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($keterangan)){
echo "<script>alert('keterangan belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
{
$sql ="INSERT INTO barang (nama_barang, jenis_barang,kategori, stok,harga, keterangan, gambar) 
values ('$nama_barang','$jenis_barang','$kategori','$stok','$harga', '$keterangan','$nama_foto')";
$daftar = mysqli_query($koneksi,$sql); 
move_uploaded_file($tmp_file, $path);
if ($daftar){
echo "<script>alert('Berhasil Menambah Data Produk')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{
echo "<script>alert('Gagal Menambah Data Produk')</script>";
echo "<meta http-equiv='refresh' content='1 url=tambahbarang.php'>";
}
}

?>

