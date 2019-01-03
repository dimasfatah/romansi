<?php 
 if($_SERVER['REQUEST_METHOD'] == "POST") {
 	session_start();
 	$username= $_SESSION['nama_user'];
 	include("./../config.php");
 	$nama_depan=$_POST['namadepan'];
 	$nama_belakang=$_POST['namabelakang'];
 	$jk=$_POST['jk'];
 	$email=$_POST['email'];
 	$password=$_POST['password'];
 	$tgl_lahir=$_POST['tgl_lahir'];
 	$tgl_pernikahan=$_POST['tgl_pernikahan'];
 	
 	$query="Update client set nama_depan='$nama_depan',nama_belakang='$nama_belakang',jk='$jk',email='$email',tgl_lahir='$tgl_lahir',tgl_pernikahan='tgl_pernikahan' where username='$username'";
 	$queryuser="UPDATE user set password='$password' where username='$username' ";
 	mysqli_query($koneksi,$query);
 	mysqli_query($koneksi,$queryuser);
 	header("location=index.php");
 	
 } 
 else{
 	
?>
 	
 

<?php 
session_start();
include("./../config.php");
$username = $_SESSION['nama_user'];
$query= mysqli_query($koneksi,"Select * from client natural join user where username='$username'");
$row=mysqli_fetch_array($query);
?>
<div class="container">
            <h3 class="modal-title" align="center">Edit Data Profil</h3>
            <br>
            <form class="form-horizontal" method="post">
            	<div class="form-group">
                	<label class="control-label col-sm-2" for="namadepan"">Nama Depan</label>
                    <div class="col-sm-5">
                    	<input type="text" name="namadepan" class="form-control" id="namadepan" value="<?php echo $row['nama_depan']; ?>"/>
                    </div>
                </div>
                <div class= "form-group">
                	<label class="control-label col-sm-2" for="namabelakang">Nama Belakang</label>
                    <div class="col-sm-5">
                    	<input type="text" name="namabelakang" class="form-control" id="namabelakang"        value="<?php echo $row['nama_belakang']; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="jk">Jenis Kelamin</label>
                    <div class="col-sm-3" name="jk" id="jk">
                    	<select name="jk" class="form-control">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="email">Email</label>
                    <div class="col-sm-5">
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $row['email']; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="password">Password</label>
                    <div class="col-sm-5">
                    	<input type="text" name="password" class="form-control" id="password" value="<?php echo $row['password']; ?>">
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="tgl_lahir">Tanggal_lahir</label>
                    <div class="col-sm-3">
                    	<input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
                    </div>
                </div>
                
                <div class="form-group">
                	<label class="control-label col-sm-2" for="tgl_pernikahan">Tanggal_Pernikahan</label>
                    <div class="col-sm-3">
                    	<input type="date" name="tgl_pernikahan" class="form-control" id="tgl_pernikahan">
                    </div>
                </div>
                
                <div class="form-group">
                <label class="control-label col-sm-4" for="submit"></label>
                <button type="submit" name="submit" class="btn btn-primary">Submit</form>
                </div>
            </form>
            </div>
            
 <?php 
 }
 ?>           
            
            
