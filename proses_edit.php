<?php
include "koneksi.php";

$id_produk = $_GET['id_produk'];
$id_kategori = $_GET['id_kategori'];
$nama = $_GET['nama'];
$foto = $_GET['foto'];
$deskripsi = $_GET['deskripsi'];
$harga = $_GET['harga'];
$ukuran = $_GET['ukuran'];
$ketersediaan = $_GET['ketersediaan'];

$sql = "UPDATE produk SET
id_produk = '$id_produk',
foto = '$foto',
deskripsi = '$deskripsi',
harga = '$harga'
WHERE id_produk = '$id_produk' ";

$query = mysqli_query($koneksi,$sql);
if ($query) {
header("location:dashboard.php?edit=sukses");
exit;
} else {
header("location:dashboard.php?edit=gagal");
exit;
}
?>