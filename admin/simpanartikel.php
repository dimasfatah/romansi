<?php
include("config.php");
$penulis=$_POST['penulis'];
$judul=$_POST['judulartikel'];
$isi=$_POST['isi'];

$query="insert into artikel(judul_artikel,penulis,isi) values ('$judul','$penulis','$isi')";
mysqli_query($koneksi,$query);
header("location:artikel.php");

?>