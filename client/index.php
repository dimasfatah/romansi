<?php
error_reporting(0);
session_start();
include ("config.php");
$page = "page/".$_GET['halaman'].".php";
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from sainathchillapuram.com/BS/mediplus/dental/html-fullwidth/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2016 07:29:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Romansi</title>
		
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Google Web Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,700,600,800,900" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=BenchNine:400,300,700" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
		
		<!-- Template CSS Files  -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="js/plugins/camera/css/camera.css" rel="stylesheet">
		<link href="js/plugins/datepicker/css/datepicker.css" rel="stylesheet">
		<link href="js/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fav-144.html">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fav-114.html">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fav-72.html">
		<link rel="apple-touch-icon-precomposed" href="images/fav-57.html">
		<link rel="shortcut icon" href="images/fav.html">
		
	</head>
	<body>
	<!-- Header Starts -->
		<header class="main-header">
		<!-- Top Bar Starts -->
			
		<!-- Top Bar Starts -->
		<!-- Navbar Starts -->
			<nav id="nav" class="navbar navbar-default navbar-static-top" role="navigation">
			<!-- Container Starts -->
				<div class="container">
				<!-- Navbar Header Starts -->
					<div class="navbar-header">
					<!-- Collapse Button Starts -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					<!-- Collapse Button Ends -->
					<!-- Logo Starts -->
						<a href="." class="navbar-brand">
							<img class="img-responsive" src="images/logo1.png" alt="Logo">
						</a>
					<!-- Logo Ends -->
					</div>
				<!-- Navbar Header Ends -->
				<!-- Navbar Collapse Starts -->
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href=".">Home</a></li>
							<li><a href=".?halaman=profile">Profile</a></li>
							<li><a href=".?halaman=jadwal_konsultan">Jadwal Konsultan</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									Konsultasi
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href=".?halaman=psikologi">Psikologi</a></li>
									<li><a href=".?halaman=seksologi">Seksologi</a></li>
									<li><a href=".?halaman=religi">Religi</a></li>
                                    <li><a href=".?halaman=progress">IN Progress</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									Artikel
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href=".?halaman=artikel-kesehatan">Kesehatan</a></li>
									<li><a href=".?halaman=artikel-religi">Religi</a></li>
								</ul>
							</li>
							<li><a href="./../logout.php">Log Out</a></li>
						</ul>
					</div>
				<!-- Navbar Collapse Ends -->
				</div>
			<!-- Container Ends -->
			</nav>
		<!-- Navbar Ends -->
		</header>
	<!-- Header Ends -->
	<?php
	if(file_exists($page)){
		include $page;
	}else{
	?>
	<!-- Slider Section Starts -->
		<section class="slider clearfix">
			<div id="camera_wrap_1" class="camera_wrap">
			<!-- Slide #1 Starts -->
				<div data-src="images/slider/slider-img1.jpg">
					<div class="camera_caption fadeFromLeft hidden-xs">
						<h2>Konsultasi</h2>
						<h2>Tanpa Keluar Rumah</h2>
					</div>
				</div>
			<!-- Slide #1 Ends -->
			<!-- Slide #2 Starts -->
				<div data-src="images/slider/slider-img2.jpg">
					<div class="camera_caption fadeFromRight hidden-xs">
						<h2>Diskusikan</h2>
						<h2>Permasalahan Rumah Tangga Secara Lebih Pribadi</h2>
					</div>
				</div>
			<!-- Slide #2 Ends -->
			</div>
		</section>
	<!-- Slider Section Ends -->
	<!-- Notification Section Starts -->
		<section class="notification-area">
		<!-- Nested Container Starts -->
			<div class="container">
				<div class="row">
				<!-- Block #1 Starts -->
					<div class="col-sm-4 col-xs-12 block">
						<h2><i class="fa fa-user-md"></i></h2>
						<h3>Konsultan Ahli</h3>
						<p>
							Di romansi kami bekerja sama dengan kansultan yang berpengalaman dan memiliki jam terbang yang tinggi
						</p>
						
					</div>
				<!-- Block #1 Ends -->
				<!-- Block #2 Starts -->
					<div class="col-sm-4 col-xs-12 block lite">
						<h2><i class="fa fa-clock-o"></i></h2>
						<h3>Jadwal Offline</h3>
						<p>
							Jadwal Offline dari admin dalam memproses transaksi saldo
						</p>
						<ul class="list-unstyled">
							<li class="clearfix">
								<span class="pull-left">Senin - Kamis</span>
								<span class="pull-right">22.00 - 05.00</span>
							</li>
							<li class="clearfix">
								<span class="pull-left">Jumat</span>
								<span class="pull-right">10.00 - 13.00</span>
							</li>
							<li class="clearfix">
								<span class="pull-left">Sabtu - Minggu</span>
								<span class="pull-right">23.00 - 06.00</span>
							</li>
						</ul>
					</div>
				<!-- Block #2 Ends -->
				<!-- Block #3 Starts -->
				<div class="col-sm-4 col-xs-12 block">
						<h2><i class="fa fa-money"></i></h2>
						<h3>Rekening Bank</h3>
						<p>
							Romansi hanya memiliki satu Rekening BRI <br>
                            6128-09-06787-897 <br>
                            A/N Perkasa Mitra Rezeki
						</p>
						
					</div>	
				<!-- Block #3 Ends -->
				</div>
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Notification Section Ends -->
	
	

	<!-- Main Container Starts -->
		<div class="container main-container">
		<!-- Profile Section Ends -->
		</div>
	<!-- Footer Starts -->
		<footer class="main-footer">
		<!-- Footer Area Starts -->
			<div class="footer-area">
				<div class="container" align="center"><h6>Untuk Kritik dan Saran yang membangun dapat anda kirimkan ke email kami romansiperkasa@gmail.com</h6></div>
			</div>
		<!-- Footer Area Ends -->
        <?php
		}
	?>
		<!-- Copyright Starts -->
			<div class="copyright">
				<div class="container text-center">
					&copy; 2017 All Rights Reserved By <strong>Perkasa Group</strong>. Romansi 0.1
				</div>
			</div>
		<!-- Copyright Ends -->
		</footer>
	<!-- Footer Ends -->
	<!-- Template JS Files -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins/camera/js/jquery.mobile.customized.min.js"></script>
	<script src="js/plugins/camera/js/jquery.easing.1.3.js"></script>
	<script src="js/plugins/camera/js/camera.min.js"></script>
	<script src="js/plugins/datepicker/js/bootstrap-datepicker.js"></script>
	<script src="js/plugins/shuffle/jquery.shuffle.modernizr.min.js"></script>
	<script src="js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="js/custom.js"></script>	
	</body>

<!-- Mirrored from sainathchillapuram.com/BS/mediplus/dental/html-fullwidth/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2016 07:32:27 GMT -->
</html>