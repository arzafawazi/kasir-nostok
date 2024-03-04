<?php 
include "../config/koneksi.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$sql = "INSERT INTO user (nama,username,password,level) values ('$nama', '$username', '$password', '$level')";
mysqli_query($koneksi, $sql);

header("Location: user.php");
