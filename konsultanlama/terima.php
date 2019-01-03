<?php
date_timezone_set('Asia/jakarta');
session_start();
include("config.php");
$id_client=$_GET['id'];
$_SESSION['id_client']=$id_client;
$usernamekonsultan=$_SESSION['nama_user'];
$id_konsultan=$_SESSION['id_konsultan'];

$queryclient=mysqli_query($koneksi,"select username from client where id_client=$id_client");
$querykonsultan=mysqli_query($koneksi,"select tarif from konsultan where id_konsultan=$id_konsultan");
$querytarif=mysqli_fetch_array($querykonsultan);
$queryusername=mysqli_fetch_array($queryclient);
$username=$queryusername['username'];
$tarif=$querytarif['tarif'];
$querysaldo=mysqli_query($koneksi,"select saldo from dompet where username='$username'");
$querysaldokonsultan=mysqli_query($koneksi,"select saldo from dompet where username='$usernamekonsultan'");
$row=mysqli_fetch_array($querysaldo);
$rowkonsultan=mysqli_fetch_array($querysaldokonsultan);
$saldo=$row['saldo'];
$saldokonsultan=$rowkonsultan['saldo'];

mysqli_query($koneksi,"update dompet set saldo= $saldo - $tarif where username='$username'");
mysqli_query($koneksi,"update dompet set saldo= $saldokonsultan + $tarif where username='$usernamekonsultan'");
$tanggal=date("Y-m-d");
$tgl_sekarang=date('Y-m-d',strtotime($tanggal));

mysqli_query($koneksi,"insert into in_progress (id_konsultan,id_client,tgl_mulai) values ($id_konsultan,$id_client,'$tgl_sekarang')");
mysqli_query($koneksi,"delete from request_konsultasi where id_client=$id_client");
header("location:chatting.php");
?>