			<div class="container main-container">
		<!-- Nested Row Starts -->
			
			<!-- Mainarea Starts -->
				<div class="col-sm-12 col-xs-12">
					<h3 class="main-heading-1">Jadwal Konsultan</h3>
                    
<?php 
include("./../config.php");
$jadwal=mysqli_query($koneksi,"Select * from jadwal_konsultan");
$no=1;

foreach ($jadwal as $row){
	$id_konsultan=$row['id_konsultan'];
	$konsultan=mysqli_query($koneksi,"select * from konsultan where id_konsultan= $id_konsultan");
	$low=mysqli_fetch_array($konsultan);
	$nama_depan=$low['nama_depan'];
	$nama_belakang=$low['nama_belakang'];
	$spesialis=$low['spesialis'];
	$jam_mulai=$row['jam_mulai'];
	$jam_akhir=$row['jam_akhir'];
	
?>
<div class="row">
		
            <div class="well well-sm">
                <div class="media">
                    <a class="thumbnail pull-left" href="#">
                        <img class="media-object" src="./../images/avatar.png">
                    </a>
                    <div class="media-body">
                        <h6 class="media-heading"><?php echo $nama_depan." ".$nama_belakang;  ?> </h6>
                        <h7> <?php echo $spesialis; ?> </h7>
                		<p><span class="label label-primary"><?php echo $jam_mulai; ?></span> 
                		<span class="label label-danger"><?php echo $jam_akhir; ?></php></span></p>
                        <p>
                            
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
			<!-- Mainarea Ends -->
		<!-- Nested Row Ends -->
		</div>