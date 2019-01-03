<?php
session_start();
include('config.php');
$username=$_SESSION['nama_user'];

$client= mysqli_query($koneksi,"select * from client natural join dompet where username= '$username' ");
$row=mysqli_fetch_array($client);
$_SESSION['nama_depan'] = $row['nama_depan'];
$_SESSION['id_client'] = $row['id_client'];
$_SESSION['nama_belakang'] = $row['nama_belakang'];
$_SESSION['email'] = $row['email'];
$_SESSION['jk'] = $row['jk'];
$_SESSION['no_hp'] = $row['no_hp'];
$_SESSION['tgl_lahir'] = $row['tgl_lahir'];
$_SESSION['tgl_pernikahan'] = $row['tgl_pernikahan'];
$_SESSION['saldo']= $row['saldo'];

header('location:'.$url.'/'.'client'.'/');
?>