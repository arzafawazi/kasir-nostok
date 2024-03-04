<?php 
include "../config/koneksi.php";


$id= $_POST['id'];
$kode= $_POST['kode'];
$nama= $_POST['nama'];
$harga= $_POST['harga'];
$keterangan= $_POST['keterangan'];

$sql ="update menu set kode= '$kode', nama= '$nama', harga= '$harga',
keterangan= '$keterangan' where id='$id'";

mysqli_query($koneksi, $sql);

header("Location: menu.php");