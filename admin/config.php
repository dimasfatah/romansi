<?php
/**
 * Nama File : Config.php
 * File Ini berisi beberapa data penting seperti
 * Data koneksi ke database
 * Secret Kode
 * dan data lain yang nantinya akan digunakan secara terus-menerus
 */
 
  # rubahlah sesuai alamat website kamu
  $url    = 'http://localhost/romansi';
 
  # host untuk database, biasanya 'localhost'
  $dbhost = 'localhost';
 
  # username untuk mengakses database, jika dilokal biasanya 'root'
  $dbuser = 'root';
 
  # password untuk mengakses databae, jika dilokal biasanya kosong
  $dbpass = '';
 
  # nama database yang akan digunakan
  $dbname = 'romansi';
 
  # koneksi Database
  $koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 
  # Check koneksi, berhasil atau tidak
  if( $koneksi->connect_error )
  {
      die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
  }
 
  $url = rtrim($url,'/');
  ?>