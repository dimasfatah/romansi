<div class="container main-container">
		<!-- Nested Row Starts -->
			<div class="row">
			<!-- Mainarea Starts -->
				<div class="col-sm-12 col-xs-12">
					<h3 class="main-heading-1">Ambil Saldo</h3>

<?php
session_start();
include("./../config.php");
$username=$_SESSION['nama_user'];
$saldo=mysqli_query($koneksi,"select saldo from dompet where username='$username'");
$row=mysqli_fetch_array($saldo);
$saldouser=$row['saldo'];
 ?>
            <form class="form-horizontal" method="post" action="requestambilsaldo.php">
                <input type="hidden" name="username" value="<?php echo $username ?>" />
                <div class="form-group">
                	<label class="control-label col-sm-2" for="saldo">Saldo Anda</label>
                    <div class="col-sm-5">
    				<input type="text" name="saldo" readonly class="form-control" id="saldo" value="<?php echo $saldouser; ?>" />
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="norek">Nomor Rekening</label>
                    <div class="col-sm-5">
    				<input type="text" name="norek" class="form-control" id="norek" />
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="nama">Atas Nama</label>
                    <div class="col-sm-5">
                    	<input type="text" name="nama" class="form-control" id="nama">
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="nama">Nominal</label>
                    <div class="col-sm-5">
                    	<input type="text" name="nominal" class="form-control" id="nominal">
                    </div>
                </div>
                
                <div class="form-group">
                <label class="control-label col-sm-4" for="submit"></label>
                <button type="submit" name="submit" class="btn btn-primary">Request</button></form>
                </div>
            </form>
            </div>
            </div>
            </div>
            