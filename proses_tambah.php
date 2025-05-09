<?php
include "koneksi.php";

$id_kategori = $_GET['id_kategori'];
$nama = $_GET['nama'];
$foto = $_GET['foto'];
$deskripsi = $_GET['deskripsi'];
$harga = $_GET['harga'];
$ukuran = $_GET['ukuran'];
$ketersediaan = $_GET['ketersediaan'];

$sql = "INSERT INTO produk (id_kategori,nama,foto,deskripsi,harga,ukuran,ketersediaan) VALUES
('$id_kategori','$nama','$foto','$deskripsi','$harga','$ukuran','$ketersediaan')";
$query = mysqli_query($koneksi, $sql);

if ($query) {
header("location:dashboard.php?simpan=sukses");
exit;
} else {
header("location:dashboard.php?simpan=gagal");
exit;
}
?>
