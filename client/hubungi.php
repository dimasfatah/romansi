<?php
session_start();
include("config.php");

$username=$_SESSION['nama_user'];
$query=mysqli_query($koneksi,"select saldo from dompet where username='$username'");
$row=mysqli_fetch_array($query);
$saldo=$row['saldo'];
$id_konsultan=$_GET['id'];
$id_client=$_SESSION['id_client'];
$_SESSION['id_konsultan']=$id_konsultan;
$querytarif=mysqli_query($koneksi,"select tarif from konsultan where id_konsultan=$id_konsultan");
$low=mysqli_fetch_array($querytarif);
$tarif=$low['tarif'];

if ($saldo < $tarif){

echo "<script>alert('Maaf Saldo Anda Tidak mencukupi');window.location='index.php?halaman=profile'</script>";	
}
else{
	
$request=mysqli_query($koneksi,"insert into request_konsultasi (id_konsultan,id_client) values ($id_konsultan,$id_client)");
header('location:chatting.php');
}
?>