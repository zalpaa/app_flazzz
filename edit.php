<?php
include "koneksi.php";

$id_produk = $_GET['id_produk'];
$sql = "SELECT * FROM produk WHERE id_produk = '$id_produk' ";
$query = mysqli_query($koneksi, $sql);
while ($produk = mysqli_fetch_assoc($query)) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit</h1>
    <form action="proses_edit.php" method="get">
    <input type="hidden" name="id_produk" value="<?= $produk['id_produk'] ?>">
    <label for="">Id Kategori</label>
    <input type="text" name="id_kategori" id="" value="<?= $produk['id_kategori'] ?>"><br>
    <label for="">Nama</label>
    <input type="text" name="nama" id="" value="<?=$produk['nama'] ?>"><br>
    <label for="">Foto</label>
    <input type="file" name="foto" id="" value="<?= $produk['harga'] ?>"><br>
    <label for="">Deskripsi</label>
    <input type="text" name="deskripsi" id="" value="<?= $produk['deskripsi'] ?>"><br>
    <label for="">Harga</label>
    <input type="number" name="harga" id="" value="<?= $produk['harga'] ?>"><br>
    <label for="">Ukuran</label>
    <input type="text" name="ukuran" id="" value="<?= $produk['ukuran'] ?>"><br>
    <label for="">Ketersediaan</label>
    <input type="number" name="ketersediaan" id="" value="<?= $produk['ukuran'] ?>"><br>

    <input type="submit" value="Update">

</body>
</html>
<?php } ?>