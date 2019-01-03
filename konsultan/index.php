<?php
session_start();
error_reporting(0);
include ("koneksi.php");
$page = "page/".$_GET['halaman'].".php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Romansi for consultant</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/jquery.bxslider.css">
	<link rel="stylesheet" type="assets/text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="assets/text/css" href="css/demo.css" />
	<link rel="stylesheet" type="assets/text/css" href="css/set1.css" />
	<link href="assets/css/overwrite.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">
                <img class="img-responsive" src="assets/img/logo1.png" alt="Logo">
                </a>
			</div>
			<div class="navbar-collapse collapse">							
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="index.php?halaman=new">NEW</a></li>
						<li role="presentation"><a href="index.php?halaman=in_progress">IN PROGRESS</a></li>
						<li role="presentation"><a href="index.php?halaman=history">HISTORY</a></li>
						<li role="presentation"><a href="index.php?halaman=profile">PROFILE</a></li>
						<li role="presentation"><a href="./../logout.php">LOGOUT</a></li>						
					</ul>
				</div>
			</div>			
		</div>
	</nav>
	<!-- 					KOnten 					-->
    <?php
	if(file_exists($page)){
		include $page;
	}else{
	?>
	<div class="container">
		<div class="row">
			<div class="slider">
				<div class="img-responsive">
					<ul class="bxslider">				
						<li><img src="assets/img/carousel1.png" alt="Slide Image"/></li>								
						<li><img src="assets/img/carousell2.png" alt="Slide Image"/></li>	
						<li><img src="assets/img/carousel3.png" alt="Slide Image"/></li>			
					</ul>
				</div>	
			</div>
		</div>
	</div>
		
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<h2>Romansi for consultant</h2>
					<p>Pelayanan terbaik anda merupakan keutamaan bagi kami di perkasa team dalam membantu permasalahan pada rumah tangga, Hormat kami perkasa Team</p>
				</div>
				<hr>
			</div>
		</div>
	</div>
    
    <?php
	}
			?>
	

	<footer>
		<div class="last-div">
			<div class="container">
				<div class="row">
					<div class="copyright">
						© 2017 Romansi Perkasa Team | <a target="_blank" >Ver 0.1</a>
					</div>	
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=eNno
                    -->				
				</div>
			</div>
            
            
            
            <!-- END -->
			<div class="container">
				<div class="row">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
					</ul>
				</div>
			</div>
			
			<a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>	
				
			
		</div>	
	</footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script src="assets/js/jquery.isotope.min.js"></script>
	<script src="assets/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script src="assets/js/functions.js"></script>	
	<script type="text/javascript">$('.portfolio').flipLightBox()</script>
  </body>
</html>