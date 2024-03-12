<?php

$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

$harga = [
    'TV' => 4200000,
    'Kulkas' => 3100000,
    'Mesin Cuci' => 3800000
]; 

$total = $jumlah * $harga[$produk];

$total = number_format($total);

echo "<div style='border: 1px solid #000; padding: 10px; width: 300px;'>";
echo "<p>Nama : $nama</p>";
echo "<p>Pilihan Produk : $produk</p>";
echo "<p>Jumlah Beli : $jumlah</p>";
echo "<p>Total Belanja : $total</p>";
echo "</div>";

?>
