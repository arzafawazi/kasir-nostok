<?php 
include "../config/koneksi.php";
$id = $_REQUEST['id'];

$sql = "DELETE FROM menu where id = '$id'";
mysqli_query($koneksi, $sql);

header("Location: menu.php");