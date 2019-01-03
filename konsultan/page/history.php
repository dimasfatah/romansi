 <div class="container">
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
				<div class="portfolios">
					<div class="text-center">
						<h2>RECORD KONSULTASI</h2>
                     </div>
                 </div>
     </div>
     </div>
     </div>
     
     <br>
     
     <div class="container">
     <div class="row">
    <table class="table table-striped custab">
    <thead>
    
        <tr>
        	<th>NO</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Berakhir</th>
            
        </tr>
    </thead>
    <?php
    session_start();
    $id_konsultan = $_SESSION['id_konsultan']; 
    include "./../config.php";
    $query= mysqli_query($koneksi,"SELECT * from record_konsultasi where id_konsultan=$id_konsultan");
    $no = 1;
    foreach ($query as $row){
    $id_client=$row['id_client'];
    $query1=mysqli_query($koneksi,"select * from record_konsultasi natural join client where id_client=$id_client ");
		$client=mysqli_fetch_array($query1);
		echo "
		<tr>
			<td>".$no." </td>
			<td>".$client['nama_depan']." ".$client['nama_belakang']."</td>
			<td>".$client['jk']."</td>
			<td>".$client['tgl_mulai']."</td>	
			<td>".$client['tgl_berakhir']."</td>		
			

		</tr> ";
		$no++;
	}
    ?>
            
    </table>
    </div>
</div>