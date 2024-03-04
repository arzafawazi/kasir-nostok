<?php 
include "../config/koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

$sql = "INSERT INTO menu (kode,nama,harga,keterangan) values ('$kode', '$nama', '$harga', '$keterangan')";
mysqli_query($koneksi, $sql);

header("Location: menu.php");
