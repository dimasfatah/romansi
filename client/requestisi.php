<?php 
include("../konsultan/config.php");
$username=$_POST['username'];
$norek=$_POST['norek'];
$nama=$_POST['nama'];
$nominal=$_POST['nominal'];

$simpan= mysqli_query($koneksi,"insert into request_isisaldo (username,no_rekening,atas_nama,nominal) values ('$username','$norek','$nama',$nominal)");

echo $username;
echo $norek;
echo $nama;
echo $nominal;

if ($simpan){
    echo "<script>alert('Request berhasil, Silahkan transfer ke rekening kami :)');window.location='index.php?page=profile'</script>";
    }
else{
	echo "<script>alert('Request anda gagal');window.location='index.php?page=profile'</script>";
	}	

?>