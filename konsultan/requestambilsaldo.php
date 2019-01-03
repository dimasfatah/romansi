<?php 
session_start();
include("config.php");
$username=$_POST['username'];
$norek=$_POST['norek'];
$nama=$_POST['nama'];
$nominal=$_POST['nominal'];

$simpan= mysqli_query($koneksi,"insert into request_ambilsaldo (username,no_rekening,atas_nama,nominal) values ('$username','$norek','$nama',$nominal)");

if ($simpan){
    echo "<script>alert('Transaksi Sukses. Akan segera kami transfer ke rekening anda');window.location='index.php?page=profile'</script>";
    }
else{
	echo "<script>alert('Request anda gagal');window.location='index.php?page=profile'</script>";
	}	

?>