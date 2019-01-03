<?php
include('config.php');
$namadepan=$_POST['namadepan'];
$namabelakang=$_POST['namabelakang'];
$username=$_POST['username'];
$jk=$_POST['jk'];
$email=$_POST['email'];
$password=$_POST['password'];
$ttl=$_POST['tgl_lahir'];
$spesialis=$_POST['spesialis'];
$tarif = $_POST['tarif'];
$jam_mulai=$_POST['jam_mulai'].':00';
$jam_akhir=$_POST['jam_akhir'].':00';

$queryuser="insert into user(username,password,hak_akses) values('$username','$password','Konsultan')";
$querykonsultan="insert into konsultan(username,nama_depan,nama_belakang,jk,email,tgl_lahir,spesialis,tarif) values ((Select username from user where username='$username'),'$namadepan','$namabelakang','$jk','$email','$ttl','$spesialis',$tarif)";
$querydompet="insert into dompet(username) values ((Select username from user where username='$username'))";

$y= mysqli_query($koneksi,$queryuser);
$r= mysqli_query($koneksi,$querykonsultan);
$s= mysqli_query($koneksi,$querydompet);

$query= mysqli_query($koneksi,"select id_konsultan from konsultan where username='$username'");
$low=mysqli_fetch_array($query);
$idkonsultan=$low['id_konsultan'];
mysqli_query($koneksi,"insert into jadwal_konsultan(id_konsultan,jam_mulai,jam_akhir) values($idkonsultan,'$jam_mulai','$jam_akhir')");

header("location:datakonsultan.php");

?>