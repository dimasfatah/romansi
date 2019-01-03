<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>konsultan</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>ROMANSI for Consultant</strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="index.php?page=new">NEW </a></li>
                    <li role="presentation"><a href="index.php?page=in_progress">IN PROGRESS</a></li>
                    <li role="presentation"><a href="index.php?page=history">HISTORY </a></li>
                    <li role="presentation"><a href="index.php?page=profile">PROFILE </a></li>
                </ul>
                <a href="./../logout.php" class="btn btn-default navbar-btn navbar-right" type="button">logout<span style="text-decoration: line-through;"></span> </a>
            </div>
        </div>
    </nav>
    <?php 
    if(isset($_GET['page'])){
    	$page=$_GET['page'];
    	
    	switch ($page){
    		case 'new':
    			include "halaman/new.php";
    			break;
    		case 'in_progress':
    			include "halaman/in_progress.php";
    			break;
    		case 'history':
    			include "halaman/history.php";
    			break;
    		case 'profile':
    			include "halaman/profile.php";
    			break;
    		case 'editprofil';
    			include "halaman/editprofil.php";
    			break;
			case 'ambilsaldo';
			include"halaman/ambilsaldo.php";
			break;	
    		default :
    			
    			break;
    	}
    }else {
    	include "halaman/home.php";
    }
    
    ?>
    
    
    
    
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>