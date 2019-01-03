<?php
include 'config.php';
// menyimpan data id kedalam variabel
$id   = $_GET['username'];
// query SQL untuk insert data
$queryclient="DELETE from client where username='$id'";
$queryuser="DELETE from user where username='$id'";
$y=mysqli_query($koneksi, $queryclient);
$r=mysqli_query($koneksi,$queryuser);


// mengalihkan ke halaman index.php
header("location:dataclient.php");
?>