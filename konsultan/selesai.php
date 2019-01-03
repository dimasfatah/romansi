<?php
include("config.php");
session_start();
$id_progress=$_GET['id_progress'];
$queryprogress=mysqli_query($koneksi,"select * from in_progress where id_progress=$id_progress");
$row=mysqli_fetch_array($queryprogress);
$tgl_mulai=$row['tgl_mulai'];
$id_client=$row['id_client'];
$id_konsultan=$row['id_konsultan'];
$tgl_berakhir=date("Y/m/d h:i:s");

$tglakhir=date('Y-m-d h:i:s',strtotime($tgl_berakhir));
echo $tglakhir;
$tglmulai=date('Y-m-d h:i:s',strtotime($tgl_mulai));
mysqli_query($koneksi,"insert into record_konsultasi (id_konsultan,id_client,tgl_mulai,tgl_berakhir) values ($id_konsultan,$id_client,'$tglmulai','$tglakhir')");
mysqli_query($koneksi,"delete from in_progress where id_progress=$id_progress");
header("location:index.php?page=in_progress");
?>