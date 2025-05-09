<?php
include ("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>Tambah</h1>
<form action="proses_tambah.php" method="get">
<label for="">Id Kategori</label>
<input type="number" name="id_kategori" id=""><br>
<label for="">Nama</label>
<input type="text" name="nama" id=""><br>
<label for="">Foto</label>
<input type="file" name="foto" id=""><br>
<label for="">Deskripsi</label>
<input type="text" name="deskripsi" id=""><br>
<label for="">Harga</label>
<input type="number" name="number" id=""><br>
<label for="">Ukuran</label>
<input type="text" name="ukuran" id=""><br>
<label for="">Ketersediaan</label>
<input type="number" name="ketersediaan" id=""><br>
<input type="submit" value="Simpan">
</form>
</body>
</html>