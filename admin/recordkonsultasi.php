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
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
        <div class="panel-heading">
								<span class="panel-title pull-left text-black"><i class="fa fa-fw fa-users"></i> Data Client</span>
								<div class="btn-group btn-group-sm pull-right" role="group">
									<a class="btn btn-default" href="#"><i class="fa fa-fw fa-refresh"></i> <span class="hidden-sm">refresh</span></a>									
        </div>
								<!-- QUICK SEARCH -->
								<form action="#" class="pull-right hidden-xs">
									<div class="form-group">
										<div class="input-group input-group-sm">
											<input type="text" class="form-control" placeholder="search">
											<span class="input-group-btn">
												<button class="btn btn-default"><i class="fa fa-search"></i></button>
											</span>
										</div>
									</div>
								</form>
								<div class="clearfix"></div>
		  </div>
        
        
<div class="panel-body table-responsive table-full">
<table class="table table-stripped table-hover table-bordered">
									<thead>
										<tr>
											<th class="text-center">NO</th>
											<th class="text-center text-nowrap">ID Record</th>
											<th class="text-center text-nowrap">Nama Client</th>
											<th class="text-center text-nowrap">Nama Konsultan</th>
											<th class="text-center text-nowrap">Tanggal Mulai</th>
											<th class="text-center text-nowrap">Tanggal Berakhir</th>
											<th class="text-center text-nowrap">Action</th>
										</tr>
									</thead>
									<tbody>
									<!-- <tr>
											 FORM FILTER -->
											<!--
											<form action="#">
												<td><input type="text" class="form-control input-sm" name="id" placeholder="staff id"></td>
												<td><input type="text" class="form-control input-sm" name="first_name" placeholder="first name"></td>
												<td><input type="text" class="form-control input-sm" name="last_name" placeholder="last name"></td>
												<td>
													<select name="branch_id" class="form-control input-sm">
														<option value="">All</option>
														<option value="1">Branch #1</option>
													</select>
												</td>
												<td>
													<select name="position_id" class="form-control input-sm">
														<option value="">All</option>
														<option value="1">Position #1</option>
													</select>
												</td>
												<td>
													<select name="gender" class="form-control input-sm">
														<option value="">All</option>
														<option value="0">Male</option>
														<option value="1">Female</option>
													</select>
												</td>
												<td><button class="btn btn-sm btn-default btn-block"><i class="fa fa-search"></i></button></td>
											</form>
										</tr> -->
	
	
									<!-- DATA START HERE -->
 	<?php
    include 'config.php';
    $client = mysqli_query($koneksi, "SELECT * from record_konsultasi");
    $no=1;
    foreach ($client as $row){
    	$ididclient=$row['id_client'];
    	$ididkonsultan=$row['id_konsultan'];
    	$id_record=$row['id_record'];
    	$queryclient=mysqli_query($koneksi,"select * from client where id_client=$ididclient");
    	$rowclient=mysqli_fetch_array($queryclient);
    	$querykonsultan=mysqli_query($koneksi,"select * from konsultan where id_konsultan=$ididkonsultan");
    	$rowkonsultan=mysqli_fetch_array($querykonsultan);
        echo "<tr>
            <td>".$no."</td>
            <td>".$row['id_record']."</td>
            <td>".$rowclient['nama_depan']." ".$rowclient['nama_belakang']."</td>
            <td>".$rowkonsultan['nama_depan']." ".$rowkonsultan['nama_belakang']."</td>
            <td>".$row['tgl_mulai']."</td>
            <td>".$row['tgl_berakhir']."</td>
			<td><a href='hapus.php?id_record=$id_record'>Hapus</a>
                
			</td>
              </tr>";
        $no++;
    }
    ?>
    
    
										
											
									</tbody
								></table>
		  </div>
                           </table>
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