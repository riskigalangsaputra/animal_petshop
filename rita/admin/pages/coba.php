<html>
<head>
<title>Teknik Upload Gambar</title>
</head>
<form enctype="multipart/form-data" method="post" action="save.php">
<table align="center" border="0">
 <tr>
  <td colspan="2" align="center">Teknik Upload Gambar</td>
 </tr>
 <tr>
  <td>Silahkan Tekan Tombol Browse Untuk mencari file yang ingin diupload</td>
 </tr>
 <tr>
  <td colspan="2" align="center"><input type="file" name="adiputra"></td>
  <td></td>
 </tr>
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Id Petshop</label>
   <input class="form-control form-control-sm" type="text" name="id_petshop">
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Nama Petshop</label>
   <input class="form-control form-control-sm" type="text" name="nama_petshop">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
   <label for="exampleFormControlTextarea1">No.telpon</label>
   <input class="form-control form-control-sm" type="text" name="tlp">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Fasilitas </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="fasilitas"></textarea>
  </div>
 <tr>
  <td><input type="submit" name="tombol" value="Upload !"></td>
  </tr>
</table>
<body>
</body>
</html>