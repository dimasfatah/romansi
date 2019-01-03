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
            <h3 class="modal-title" align="center">Isi Artikel</h3>
            <br/><br/>
            <form class="form-horizontal" action="simpanartikel.php" method="post">
            <div class="form-group">
                	<label class="col-sm-2" for="judulartikel" >Judul</label>
                    <div class="col-sm-5">
                    <input type="text" name="judulartikel" class="form-control" id="judulartikel">
                    </div>
            </div>
            <div class="form-group">
                	<label class="col-sm-2" for="judulartikel" >Penulis</label>
                    <div class="col-sm-5">
                    <input type="text" name="penulis" class="form-control" id="penulis">
                    </div>
            </div>
            <h5 class="modal-title" align="center">ISI</h5>
            <div class="form-group-sm">
            	<div class="col-lg-11" >
            		<textarea type="text" name="isi" class="form-control" id="isi" rows="20"></textarea>
            	</div>
            </div>
        
            
            <div class="form-group">
                	<label class="control-label col-sm-3" for="submit"></label>
                	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
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