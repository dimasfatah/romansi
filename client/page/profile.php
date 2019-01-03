<?php 
session_start();
include("./../config.php");
$username=$_SESSION['nama_user'];
$client= mysqli_query($koneksi,"select * from client natural join dompet where username= '$username' ");
$row=mysqli_fetch_array($client);
?>

<div class="container main-container">
		<!-- Nested Row Starts -->
			<div class="row">
			<!-- Mainarea Starts -->
				<div class="col-sm-12 col-xs-12">
					<h3 class="main-heading-1">Profile User</h3>

    <div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href=" .?halaman=editprofil" >Edit Profil</A>

       <br>
<p class=" text-info">  <?php date_default_timezone_set("Asia/Jakarta"); echo date("Y-m-d h:i:s "); ?> </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"> <?php echo $row['nama_depan']." ".$row['nama_belakang'];  ?> </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Username:</td>
                        <td> <?php echo $row['username'] ?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Pernikahan:</td>
                        <td> <?php echo $row['tgl_pernikahan'] ?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Lahir</td>
                        <td> <?php echo $row['tgl_lahir'] ?></td>
                      </tr>
                   
                         <tr>
                      <tr>
                        <td>Jenis Kelamin</td>
                        <td> <?php echo $row['jk'] ?></td>
                      </tr>
                        <tr>
                        <td>Nomoor HP</td>
                        <td> <?php echo $row['no_hp']; ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td> <?php echo $row['email'] ?></td>
                      </tr>
                      <tr>
                        <td>Saldo</td>
                        <td> <?php echo"Rp. ". $row['saldo'] ?></td>
                        <td> <a href="index.php?halaman=isisaldo">Isi Saldo</a></td>
                      </tr>
                    
                    </tbody>
                  </table>
                  
             
                </div>
              </div>
            </div>
                 <div class="panel-footer"> </div>
            
          </div>
        </div>
      </div>
    </div>
    
    		</div>
			<!-- Mainarea Ends -->
		<!-- Nested Row Ends -->
		</div>