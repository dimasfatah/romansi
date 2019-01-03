<?php
include ('config.php');
$username=$_POST['username'];
$nominal=$_POST['nominal'];
$saldo=mysqli_query($koneksi,"select saldo from dompet where username='$username'");
$row=mysqli_fetch_array($saldo);
$ss=$row[saldo];
$isi=mysqli_query($koneksi,"update dompet set saldo= $ss + $nominal where username='$username'");
header("location:isisaldo.php");

?>