<?php 


session_start();

include "config/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user where username = '".$username."' AND password = '".$password."'";
$hasil = mysqli_query($koneksi, $sql);
$jumlah = mysqli_num_rows($hasil);

if ($jumlah > 0) {
    $row = mysqli_fetch_assoc($hasil);

    $_SESSION["id"] = $row['id'];
    $_SESSION["username"] = $row['username'];
    $_SESSION["nama"] = $row['nama'];

    $level = $row['level'] ;
    
    if ($level == "Administrator") {
        header("Location: admin");
    }elseif ($level == "Kasir") {
        header("Location: kasir");
    }else{
        header("Location: index.php");    
    }
}else{
    header("Location: index.php");    
}