<?php
include 'koneksi.php';

$nama    = $_POST['nama'];
$layanan = $_POST['layanan'];
$berat   = $_POST['berat'];
$tgl     = $_POST['tgl'];
$status  = "Proses";

$harga_per_kg = 0;
if ($layanan == 'Cuci Basah') $harga_per_kg = 3000;
elseif ($layanan == 'Cuci Kering') $harga_per_kg = 4000;
elseif ($layanan == 'Cuci Setrika') $harga_per_kg = 6000;

$total_harga = $berat * $harga_per_kg;

$query = "INSERT INTO pesanan (nama_pelanggan, jenis_layanan, berat, harga, tanggal_masuk, status) 
          VALUES ('$nama', '$layanan', '$berat', '$total_harga', '$tgl', '$status')";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
} else {
    echo "Gagal: " . mysqli_error($koneksi);
}
?>