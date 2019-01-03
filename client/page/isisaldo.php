<div class="container main-container">
		<!-- Nested Row Starts -->
			<div class="row">
			<!-- Mainarea Starts -->
				<div class="col-sm-12 col-xs-12">
					<h3 class="main-heading-1">ISI SALDO</h3>

<?php
session_start();
$username=$_SESSION['nama_user'];
 ?>
            <form class="form-horizontal" method="post" action="requestisi.php">
                <input type="hidden" name="username" value="<?php echo $username ?>" />
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
                        	<select name="Nominal">
                            <option value="15000">15000</option>
                            <option value="25000">25000</option>
                            <option value="35000">35000</option>
                            <option value="45000">45000</option>
                            <option value="55000">55000</option>
                            <option value="100000">100000</option>
                        </select>
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
            