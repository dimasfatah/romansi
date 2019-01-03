<?php
session_start();
include_once "config.php";
if( isset($_POST['message']) ){
  $username = $_Session['nama_user'];
  $message = $_POST['message'];

  $query =mysqli_query($koneksi,"INSERT INTO chat(username,message)VALUES((select username from user where username='$username'),'$message');");
}
$mysqli->close();
?>