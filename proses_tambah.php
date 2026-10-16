<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$mobil = $_POST['mobil'];
$lama = $_POST['lama'];

$status = "Disewa";

$harga_per_hari = 0;

if ($mobil == "Toyota Avanza") {

    $harga_per_hari = 300000;

} elseif ($mobil == "Honda Brio") {

    $harga_per_hari = 250000;

} elseif ($mobil == "Toyota Fortuner") {

    $harga_per_hari = 500000;
}

$total = $lama * $harga_per_hari;

$query = "INSERT INTO penyewaan
          (nama_penyewa, mobil, lama_sewa, total_harga, status)
          VALUES
          ('$nama', '$mobil', '$lama', '$total', '$status')";

mysqli_query($koneksi, $query);

header("location:index.php");

?>