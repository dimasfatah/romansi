<?php
include'config.php';
// menyimpan data kedalam variabel
$namadepan = $_POST['nama_depan'];
$namabelakang = $_POST['nama_belakang'];
$tgl_lahir=$_POST['tanggallahir'];
$tgl_pernikahan=$_POST['tanggalpernikahan'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$nohp = $_POST['nohp'];
$user = $_POST['username'];
$password = $_POST['password'];
// query SQL untuk insert data
$queryclient="UPDATE client SET nama_depan='$namadepan',nama_belakang='$namabelakang',tgl_lahir='$tgl_lahir',tgl_pernikahan='$tgl_pernikahan',email='$email',jk='$jk',no_hp='$nohp' where username='$user'";
$queryuser="UPDATE user SET password='$password' where username='$user'";
$y = mysqli_query($koneksi,$queryclient);
$r = mysqli_query($koneksi,$queryuser);
// mengalihkan ke halaman Sebelumnya
header("location:dataclient.php");
/* if($y){
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
}  */

?>