   
    <div class="container">
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
				<div class="portfolios">
					<div class="text-center">
						<h2>IN PROGRESS</h2>
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
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <?php
    session_start();
    $id_konsultan = $_SESSION['id_konsultan']; 
    include "./../config.php";
    $query= mysqli_query($koneksi,"SELECT * from in_progress where id_konsultan=$id_konsultan");
    $no = 1;
    foreach ($query as $row){
    $id_client=$row['id_client'];
    $query1=mysqli_query($koneksi,"select * from in_progress natural join client where id_client=$id_client");
    $id_progress=$row['id_progress'];
		$client=mysqli_fetch_array($query1);
		echo "
		<tr>
			<td>".$no." </td>
			<td>".$client['nama_depan']." ".$client['nama_belakang']."</td>
			<td>".$client['jk']."</td>
			<td>".$client['tgl_mulai']."</td>			
			<td> <a href='chatting.php?id_client=$id_client'> Chat </a> 
				<a href='selesai.php?id_progress=$id_progress'>Selesai </a>
			</td>

		</tr> ";
		$no++;
	}
    ?>
            
    </table>
    </div>
</div>