<?php
 session_start();
 
# check apakah ada akse post dari halaman login?, jika tidak kembali kehalaman depan
 if( !isset($_POST['username']) ) { header('location:index.php'); exit(); }
 
# set nilai default dari error,
 $error = '';
 
 require ( 'config.php' );
 
 $username = trim( $_POST['username'] );
 $password = trim( $_POST['password'] );
 
 if( strlen($username) < 2 )
{
     # jika ada error dari kolom username yang kosong
     $error = 'Username tidak boleh kosong';
 }else if( strlen($password) < 2 )
{
     # jika ada error dari kolom password yang kosong
     $error = 'Password Tidak boleh kosong';
 }else{
 
     # Escape String, ubah semua karakter ke bentuk string
     $username = $koneksi->escape_string($username);
     $password = $koneksi->escape_string($password);
 
     # hash dengan md5
     #$password = md5($password);
 
     # SQL command untuk memilih data berdasarkan parameter $username dan $password yang 
     # di inputkan
     $sql = "SELECT username, hak_akses FROM user 
            WHERE username='$username' 
             AND password='$password' LIMIT 1";
 
     # melakukan perintah
     $query = $koneksi->query($sql);
 
     # check query
     if( !$query )
     {
         die( 'Oops!! Database gagal '. $koneksi->error );
     }
 
     # check hasil perintah
     if( $query->num_rows == 1 )
     {    
         # jika data yang dimaksud ada
         # maka ditampilkan
         $row =$query->fetch_assoc();
        
         # data nama disimpan di session browser
         $_SESSION['nama_user']   = $row['username']; 
         $_SESSION['akses']       = $row['hak_akses'];
 
         if( $row['hak_akses'] == 'admin')
         {
             # data hak Admin di set
             $_SESSION['saya_admin']= 'TRUE';
         }
         
		 }
		 
		 $akses=$_SESSION['akses'];
         if($akses == 'konsultan'){
		 	header('location:loginkonsultan.php');	
		 }
		 else if($akses == 'client'){
		 	header('location:loginclient.php');
		 }
			else if ($akses == 'admin'){
				header('location:'.$url.'/'.'admin'.'/');
			}
			else{
				echo "<script>alert('Username / Password Salah');window.location='login.php'</script>";
			}	
         /* # menuju halaman sesuai hak akses
         header('location:'.$url.'/'.$_SESSION['akses'].'/');
         exit(); 
		
 
     }else{
        
         # jika data yang dimaksud tidak ada
         $error = 'Username dan Password Tidak ditemukan';
     } */
 
}
 
 if( !empty($error) )
{
     # simpan error pada session
     $_SESSION['error'] = $error;
     header('location:'.$url.'/login.php');
     exit();
}
?>