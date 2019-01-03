<div class="container main-container">
		<!-- Main Heading Starts -->
		<?php
			include("./../config.php");
			$query = mysqli_query($koneksi,"SELECT * FROM artikel_kesehatan WHERE id='$_GET[id]'");
			$data = mysqli_fetch_array($query)
		?>
			<h4 class="main-heading-1"><?php echo $data['nama']?></h4>
		<!-- Main Heading Ends -->			
			<p>
				<?php echo $data['isi']?>
			</p>

		<!-- Profile Section Starts -->
			
		<!-- Profile Section Ends -->
		</div>