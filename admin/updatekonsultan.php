<?php
include'config.php';
// menyimpan data kedalam variabel
$namadepan = $_POST['nama_depan'];
$namabelakang = $_POST['nama_belakang'];
$tgl_lahir=$_POST['tanggallahir'];
$spesialis=$_POST['spesialis'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$user = $_POST['username'];
$password = $_POST['password'];
// query SQL untuk insert data
$querykonsultan="UPDATE konsultan SET nama_depan='$namadepan',nama_belakang='$namabelakang',tgl_lahir='$tgl_lahir',spesialis='$spesialis',email='$email',jk='$jk' where username='$user'";
$queryuser="UPDATE user SET password='$password' where username='$user'";
$y = mysqli_query($koneksi,$querykonsultan);
$r = mysqli_query($koneksi,$queryuser);
// mengalihkan ke halaman Sebelumnya
header("location:datakonsultan.php");
/* if($y){
	echo "sukses";
	echo $spesialis;
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
*/
?>