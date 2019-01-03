<div class="container main-container">
		<!-- Nested Row Starts -->
			<div class="row">
			<!-- Mainarea Starts -->
				<div class="col-sm-12 col-xs-12">
					<h3 class="main-heading-1">Artikel Kesehatan</h3>
				<!-- Blog Posts Starts -->
					<div class="row">
					<!-- Blog Post #1 Starts -->
					<?php
					include("./../config.php");
					$query = mysqli_query($koneksi,"SELECT * FROM artikel_kesehatan");
					$no=1;
					foreach($query as $data){
					?>
						<div class="col-md-4 col-xs-12">
							<div class="panel panel-smart blog">
								<div class="panel-heading">
									<?php echo $data['nama']?>
								</div>
								<div class="panel-body">
			
										<img src="<?php echo $data['gambar']?>" alt="Blog Post Image" class="img-responsive">
									</p>
									<p>
										<?php echo $data['deskripsi']?>
									</p>
									<a href=".?halaman=deskripsi-artikel-kesehatan&amp;id=<?php echo $data['id']?>" class="btn btn-secondary text-uppercase">Read More</a>
								</div>
							</div>
						</div>
						
						
					<!-- Blog Post #1 Ends -->
					<?php
					}
					?>
					
					</div>
				<!-- Blog Posts Ends -->
				<!-- Pagination Starts -->
					<div class="clearfix">
						<ul class="pagination pull-right">
							<li><a href="#">Previous</a></li>
							<li class="active"><span>1</span></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				<!-- Pagination Ends -->
				</div>
			<!-- Mainarea Ends -->
		<!-- Nested Row Ends -->
		</div>