<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Sign UP</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="daftar.php" method="post">
		        <h2 class="form-login-heading">Sign up</h2>
		        <div class="login-wrap">
	              	<input type="text" name="namadepan" class="form-control" placeholder="Nama Depan" autofocus>
		            <br>
                    <input type="text" name="namabelakang" class="form-control" placeholder="Nama Belakang" autofocus>
                    <br>
		            <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
                    <h5 class = "Modal Title">Tanggal Lahir</h5>
                    <input type="date" name="tanggallahir" class="form-control" placeholder="tanggal lahir" autofocus>
                    <h5 class = "Modal Title">Tanggal Pernikahan</h5>
                    <input type="date" name="tanggalpernikahan" class="form-control" placeholder="tanggal pernikahan" autofocus>
                    <br/>
                    <input type="text" name="nohp" class="form-control" placeholder="No HP" autofocus>
                    <br/>
                    <input type="text" name="mail" class="form-control" placeholder="Email" autofocus>
		            <br>
                    <input type="text" name="password" class="form-control" placeholder="Password">
                    <br>
                    <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin (L/P)" autofocus>
		            <br>
		            
<button class="btn btn-theme btn-block" href="index.html" type="submit"><em class="fa fa-lock"></em> SIGN UP</button>
		            <hr>
</div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/bgloginbaru.jpg", {speed: 500});
    </script>


  </body>
</html>
