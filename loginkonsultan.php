<?php
session_start();
include('config.php');
$username=$_SESSION['nama_user'];

$konsultan= mysqli_query($koneksi,"select * from konsultan natural join dompet where username= '$username' ");
$row=mysqli_fetch_array($konsultan);
$_SESSION['nama_depan'] = $row['nama_depan'];
$_SESSION['id_konsultan'] = $row['id_konsultan'];
$_SESSION['nama_belakang'] = $row['nama_belakang'];
$_SESSION['email'] = $row['email'];
$_SESSION['jk'] = $row['jk'];
$_SESSION['tgl_lahir'] = $row['tgl_lahir'];
$_SESSION['spesialis'] = $row['spesialis'];
$_SESSION['tarif'] = $row['Tarif'];
$_SESSION['saldo']= $row['saldo'];

header('location:'.$url.'/'.'konsultan'.'/');
?>