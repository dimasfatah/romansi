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
            <h3 class="modal-title" align="center">Tambah Saldo</h3>
            <br>
            <form class="form-horizontal" action="prosessaldo.php" method="post">
            
            	<div class="form-group">
                	<label class="control-label col-sm-2" for="username">Username</label>
                    <div class="col-sm-3" name="username" id="username">
                    <select name="username" class="form-control">
                    <?php
    				include 'config.php';
    				$konsultan = mysqli_query($koneksi, "SELECT * from user");
    				$no=1;
   					foreach ($konsultan as $row){
					echo "<option value=".$row['username'].">".$row['username']."</option>";
					$no++;
					}
                    ?>    
                    </select>
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="nominal">Nominal</label>
                    <div class="col-sm-3">
                    	<input type="text" name="nominal" class="form-control" id="nominal">
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-3" for="submit"></label>
                	<button type="submit" class="btn btn-primary" name="submit">Top Up</button>
                </div> <br/>
                
                <h2 class="modal-title"></h2>
                <table class="table table-striped">
                	<thead>
                		<tr>
                			<th>Id Dompet</th>
                			<th>Username</th>
                			<th>Saldo</th>
                			<th>Type User</th>
                		</tr>
                	</thead>
                	<tbody>
                		<?php
    					include 'config.php';
    					$dompet = mysqli_query($koneksi, "SELECT * from dompet natural join user");
    					$no=1;
    					foreach ($dompet as $row){
        				echo "<tr>
            				<td>".$row['id_dompet']."</td>
            				<td>".$row['username']."</td>
            				<td>".$row['saldo']."</td>
            				<td>".$row['hak_akses']."</td>
             			</tr>";
        				$no++;
    					}
    				?>
                	</tbody>
                </table>
                
                
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