<?php 
include "../config/koneksi.php";


$id= $_POST['id'];
$nama= $_POST['nama'];
$username= $_POST['username'];
$password= $_POST['password'];
$level= $_POST['level'];

$sql ="update user set nama= '$nama', username= '$username', password= '$password',
level= '$level' where id='$id'";

mysqli_query($koneksi, $sql);

header("Location: user.php");