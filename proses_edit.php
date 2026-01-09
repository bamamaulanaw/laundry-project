<?php
include 'koneksi.php';

$id      = $_POST['id'];
$nama    = $_POST['nama'];
$layanan = $_POST['layanan'];
$berat   = $_POST['berat'];
$status  = $_POST['status'];

$harga_per_kg = 0;
if ($layanan == 'Cuci Basah') $harga_per_kg = 3000;
elseif ($layanan == 'Cuci Kering') $harga_per_kg = 4000;
elseif ($layanan == 'Cuci Setrika') $harga_per_kg = 6000;

$total_harga = $berat * $harga_per_kg;

$query = "UPDATE pesanan SET 
            nama_pelanggan = '$nama',
            jenis_layanan = '$layanan',
            berat = '$berat',
            harga = '$total_harga',
            status = '$status'
          WHERE id = '$id'";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
} else {
    echo "Gagal Update: " . mysqli_error($koneksi);
}
?>