<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query(
    $koneksi,
    "UPDATE penyewaan
     SET status='Selesai'
     WHERE id='$id'"
);

header("location:index.php");

?>