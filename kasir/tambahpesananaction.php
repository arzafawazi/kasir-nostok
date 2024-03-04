<?php
include "../config/koneksi.php";

$nofak=$_POST['nofak'];
$nomeja=$_POST['nomeja'];
$kode=$_POST['kode'];
$jumlah=$_POST['jumlah'];

        $sql = "select * from menu where kode='$kode'";
        $hasil = mysqli_query($koneksi, $sql);
        $i=1;
        while($row=mysqli_fetch_Array($hasil)){
        	$nama = $row[2];
        }

$sql ="insert into pesanan (nofak,nomeja, nama, jumlah) values ('$nofak','$nomeja','$nama','$jumlah')";
mysqli_query($koneksi, $sql);
//echo"$sql";
header("location: daftarpesanan.php");



?>