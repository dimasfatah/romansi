<?php 
include("config.php");
$username=$_POST['username'];
$norek=$_POST['norek'];
$nama=$_SESSION['nama'];
$nominal=$_SESSION['nominal'];

$simpan= mysqli_query($koneksi,"insert into request_isisaldo (username,no_rekening,atas_nama,nominal) values ('$username','$norek','$nama',$nominal)");

if ($simpan) {

//kalau berhasil maka keluar alert yang berisi menambahkan data

echo "[removed]alert('Sukses Request Isi Saldo');[removed]";

header("location:index.php?halaman=profile");//index.php hanya penamaan sample, kalau mau diganti dengan halaman return-nya.

  } else {

//kalau gagal maka keluar alert yang berisi gagal menambahkan data

echo "[removed]alert('gagal Request Isi Saldo');[removed]";

header("location:index.php?halaman=profile");//index.php hanya penamaan sample, kalau mau diganti dengan halaman return-nya.

  }


?>