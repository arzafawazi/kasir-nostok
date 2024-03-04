<?php 
include "../config/koneksi.php";
$id = $_REQUEST['id'];

$sql = "DELETE FROM user where id = '$id'";
mysqli_query($koneksi, $sql);

header("Location: user.php");