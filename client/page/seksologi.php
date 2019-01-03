<div class="container main-container">
		<!-- Nested Row Starts -->
			<div class="row">
			<!-- Mainarea Starts -->
				<div class="col-sm-12 col-xs-12">
					<h3 class="main-heading-1">Konsultan Seksologi</h3>

<?php 
include("./../config.php");
$psikologi=mysqli_query($koneksi,"Select * from konsultan where spesialis='seksologi' ");
$no=1;

foreach ($psikologi as $row){

?>
    <div class="row">
		<div class="col-md-4">
            <div class="well well-sm">
                <div class="media">
                    <a class="thumbnail pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/80">
                    </a>
                    <div class="media-body">
                        <h6 class="media-heading"><?php echo $row['nama_depan']." ".$row['nama_belakang'];  ?> </h6>
                		<p><span class="label label-info"><?php echo $row['spesialis']; ?></span> 
                		<span class="label label-primary"><?php echo "Rp.".$row['Tarif'] ?></php></span></p>
                        <p>
                            <a href="hubungi.php?id=<?php echo $row['id_konsultan']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Hubungi</a>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        $no++;
			}
		?>	
        
        
      
            </div>
       </div>
			<!-- Mainarea Ends -->
		<!-- Nested Row Ends -->
		</div></div>