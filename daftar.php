<?php
include ('config.php');
$namadepan = $_POST['namadepan'];
$namabelakang = $_POST['namabelakang'];
$tgl_lahir=$_POST['tanggallahir'];
$tgl_pernikahan=$_POST['tanggalpernikahan'];
$email = $_POST['mail'];
$jk = $_POST['jk'];
$nohp = $_POST['nohp'];
$username = $_POST['username'];
$password = $_POST['password'];

$queryuser = "insert into user(username,password,hak_akses) values('$username','$password','client')";
$queryclient = "insert into client(username,nama_depan,nama_belakang,tgl_lahir,tgl_pernikahan,email,jk,no_hp) values ((select username from user where username='$username'),'$namadepan','$namabelakang','$tgl_lahir','$tgl_pernikahan','$email','$jk','$nohp')";
$querydompet="insert into dompet (username) values ((select username from user where username='$username'))";

$y= mysqli_query($koneksi,$queryuser);
$r= mysqli_query($koneksi,$queryclient);
$s= mysqli_query($koneksi,$querydompet);
header("location:signup-landing.php");

 /*if($y){
	echo "sukses";
}
else{
echo"gagal";	
}

if($r){
	echo "sukses";
}
else{
echo"gagal";	
}
echo $username;
echo $namabelakang;
echo $namadepan;
echo $password;
echo $tgl_lahir;
echo $tgl_pernikahan;
echo $email;
echo $jk;
echo $nohp;
*/
?>