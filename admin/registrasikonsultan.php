<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Romansi Admin Panel</title>
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/theme.css">
	<link rel="stylesheet" href="assets/css/theme-helper.css">
</head>
<body>
	<div class="container-fluid active" id="wrapper">
		<div id="sidebar">
			<div id="sidebar-wrapper">
				<div class="sidebar-title"><h2>Romansi</h2><span>AdminPanel</span></div>
				<ul class="sidebar-nav">
					<li class="sidebar-close"><a href="#"><i class="fa fa-fw fa-close"></i></a></li>
					<li class="active"><a href="index.php"><i class="fa fa-fw fa-dashboard"></i><span class="nav-label">Dashboard</span></a></li>
					<li>
						<a href="#nav-dokumen" data-toggle="collapse" aria-controls="nav-dokumen"><i class="fa fa-fw fa-archive"></i><span class="nav-label">Data User</span></a>
						<ul class="sidebar-nav-child collapse collapseable " id="nav-dokumen">
							<li><a href="dataclient.php"> <span class="nav-label">Data client</span></a></li>
							<li><a href="datakonsultan.php"> <span class="nav-label">Data Konsultan</span></a></li>

						</ul>
					</li>
					<li><a href="registrasikonsultan.php"><i class="fa fa-fw fa-upload"></i><span class="nav-label">Daftar Konsultan</span></a></li>
					<li><a href="artikel.php"><i class="fa fa-fw fa-book"></i><span class="nav-label">Artikel</span></a></li>
                    <li><a href="isisaldo.php"><i class="fa fa-fw fa-dollar"></i><span class="nav-label">Isi Saldo</span></a></li>
                    <li><a href="recordkonsultasi.php"><i class="fa fa-fw fa-database"></i><span class="nav-label">Record Konsultasi</span></a></li>
                    
				</ul>
				<div class="sidebar-footer"><a href="./../logout.php">
					<button  class="btn btn-default btn-block"><i class="fa fa-fw fa-power-off"></i><span class="nav-label">logout</span></button>
				</a></div>
			</div>
		</div>
		<div id="content">
			<div class="content-nav">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<!-- Navbar toggle button -->
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
								<i class="fa fa-bars"></i>
							</button>
							<!-- Sidebar toggle button -->
							<button type="button" class="sidebar-toggle">
								<i class="fa fa-bars"></i>
							</button>
							<a class="navbar-brand text-size-24" href="index.php">Beranda</a></div>
						<div class="collapse navbar-collapse" id="menu">
							<form class="navbar-form navbar-right">
								<div class="input-group">
									<input type="text" class="form-control round" placeholder="Search">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default round"><i class="fa fa-search"></i></button>
									</span>
								</div>
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
<ul class="dropdown-menu">
				  <li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
            
            <!--Tambahkan konten di bawah ini -->
            <div class="container">
            <h3 class="modal-title" align="center">Registrasi Konsultan</h3>
            <br>
            <form class="form-horizontal" action="prosesdaftarkonsultan.php" method="post">
            	<div class="form-group">
                	<label class="control-label col-sm-2" for="namadepan"">Nama Depan</label>
                    <div class="col-sm-5">
                    	<input type="text" name="namadepan" class="form-control" id="namadepan">
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="namabelakang">Nama Belakang</label>
                    <div class="col-sm-5">
                    	<input type="text" name="namabelakang" class="form-control" id="namabelakang">
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="username">Username</label>
                    <div class="col-sm-5">
                    	<input type="text" name="username" class="form-control" id="username">
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
                    	<input type="text" name="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="password">Password</label>
                    <div class="col-sm-5">
                    	<input type="text" name="password" class="form-control" id="password">
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="tarif">Tarif</label>
                    <div class="col-sm-5">
                    	<input type="text" name="tarif" class="form-control" id="Tarif">
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="tgl_lahir">Tanggal_lahir</label>
                    <div class="col-sm-3">
                    	<input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="spesialis">spesialis</label>
                    <div class="col-sm-3" name="spesialis" id="spesialis">
                    	<select class="form-control" name="spesialis">
                        <option value="Psikologi">Psikologi</option>
                        <option value="Seksologi">Seksologi</option>
                        <option value="Religi">Religi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="jam_mulai">Jam Online</label>
                    <div class="col-sm-2">
                    	<input type="time" name="jam_mulai" class="form-control" id="jam_mulai">
                        <input type="time" name="jam_akhir" class="form-control" id="jam_akhir">
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-sm-4" for="submit"></label>
                <button type="submit" name="submit" class="btn btn-primary">Daftar</form>
                </div>
            </form>
            </div>
 
            <!-- Sampai Sini saja -->
            <div class="panel-footer">
								<span class="panel-footer-text text-grey text-size-12"><i class="fa fa-info-circle"></i> Romansi Perkasa Group</span>
							</div>
		</div>
	</div>
   
 
 
</body>
<script src="assets/plugins/jquery/jquery-3.1.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme.js"></script>
</html>