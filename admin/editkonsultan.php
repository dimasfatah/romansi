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
	<div class="container-fluid" id="wrapper">
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
							<a class="navbar-brand text-size-24" href="index.html">Beranda</a></div>
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
<?php
include('config.php');
$id = $_GET['username'];
$konsultan = mysqli_query($koneksi,"select * from konsultan where username='$id'");
$user = mysqli_query($koneksi,"select username,password from user where username='$id'");
$row = mysqli_fetch_array($konsultan);
$us =mysqli_fetch_array($user);
$date = $row['tgl_lahir'];
$date = date('m-d-Y',strtotime($date));
?>          
<div class="row">
	<div class="panel-theme .panel-heading .panel-title">
	<div class="col-xs-12">
	<form action="updatekonsultan.php" method="post">
		<table >
			<tr>
				<td> Nama </td>
				<td>:</td>
				<td><input type="text" name="nama_depan" value="<?php echo $row['nama_depan'];?> "/></td>
				<td><input type="text" name="nama_belakang" value="<?php echo $row['nama_belakang'];?> "/></td>
			</tr><br>
			<tr>
				<td> Tanggal Lahir </td>
				<td>:</td>
				<td><input type="date" name="tanggallahir" value="<?php echo $date ?> "/></td>
			</tr>
			<tr>
				<td>Spesialis </td>
				<td>:</td>
				<td>
				<select name="spesialis">
					<option value="<?php echo $row['spesialis'];?>"><?php echo $row['spesialis'];?></option>
					<option value="Psikologi">Psikologi</option>
					<option value="Seksologi">Seksologi</option>
					<option value="Religi">Religi</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" value="<?php echo $row['email'];?> "/></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="text" name="jk" value="<?php echo $row['jk'];?> "/></td>
			</tr>
			
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" readonly value="<?php echo $us['username'];?> "/></td>
			</tr>
			
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="password" value="<?php echo $us['password'];?> "/></td>
			</tr>
			<tr><td colspan="2"><button type="submit" value="simpan">Update Data</button>
                        <a href="datakonsultan.php">Kembali</a></td>
            </tr>
		</table>
	</form>
	
	</div>
	</div>
</div>	
            <!-- Sampai Sini saja -->
            <div class="panel-footer">
								<span class="panel-footer-text text-grey text-size-12"><i class="fa fa-info-circle"></i> Romansi Perkasa Group</span>
							</div>
		</div>
	</div>
    </div>
    </div>
    </div>
    
   
</body>
<script src="assets/plugins/jquery/jquery-3.1.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme.js"></script>
</html>