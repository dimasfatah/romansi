<div class="container main-container">
		<!-- Nested Row Starts -->
			<div class="row">
			<!-- Mainarea Starts -->
				<div class="col-sm-12 col-xs-12">
					<h3 class="main-heading-1">Konsultasi IN Progress</h3>
                    <table class="table table-striped custab">
    <thead>
    
        <tr>
        	<th>NO</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Spesialis</th>
            <th>Tanggal Mulai</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <?php
    session_start();
    $id_client = $_SESSION['id_client']; 
    include "./../config.php";
    $query= mysqli_query($koneksi,"SELECT * from in_progress where id_client=$id_client");
    $no = 1;
    foreach ($query as $row){
    $id_konsultan=$row['id_konsultan'];
    $query1=mysqli_query($koneksi,"select * from in_progress natural join konsultan where id_konsultan=$id_konsultan");
    $id_progress=$row['id_progress'];
		$client=mysqli_fetch_array($query1);
		echo "
		<tr>
			<td>".$no." </td>
			<td>".$client['nama_depan']." ".$client['nama_belakang']."</td>
			<td>".$client['jk']."</td>
			<td>".$client['spesialis']."</td>
			<td>".$client['tgl_mulai']."</td>			
			<td> <a href='chatting.php?id_konsultan=$id_konsultan'> Chat </a> 
				<a href='selesai.php?id_progress=$id_progress'>Selesai </a>
			</td>

		</tr> ";
		$no++;
	}
    ?>
            
    </table>
		
				</div>
			<!-- Mainarea Ends -->
		<!-- Nested Row Ends -->
		</div>