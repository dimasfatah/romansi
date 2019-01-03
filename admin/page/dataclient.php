<!--Tambahkan konten di bawah ini -->
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
        <div class="panel-heading">
								<span class="panel-title pull-left text-black"><i class="fa fa-fw fa-users"></i> Data Client</span>
								<div class="btn-group btn-group-sm pull-right" role="group">
									<a class="btn btn-default" href="#"><i class="fa fa-fw fa-refresh"></i> <span class="hidden-sm">refresh</span></a>									
        </div>
								<!-- QUICK SEARCH -->
								<form action="#" class="pull-right hidden-xs">
									<div class="form-group">
										<div class="input-group input-group-sm">
											<input type="text" class="form-control" placeholder="search">
											<span class="input-group-btn">
												<button class="btn btn-default"><i class="fa fa-search"></i></button>
											</span>
										</div>
									</div>
								</form>
								<div class="clearfix"></div>
		  </div>
        
        
<div class="panel-body table-responsive table-full">
<table class="table table-stripped table-hover table-bordered">
									<thead>
										<tr>
											<th class="text-center">User id</th>
											<th class="text-center text-nowrap">Username</th>
											<th>Nama Depan</th>
											<th>Nama Belakang</th>
											<th class="text-center text-nowrap">Tanggal lahir</th>
											<th class="text-center text-nowrap">Tanggal Pernikahan</th>
											<th class="text-center text-nowrap">Email</th>
											<th class="text-center text-nowrap">Jenis Kelamin</th>
											<th class="text-center text-nowrap">No HP</th>
											<th class="text-center text-nowrap">Action</th>
										</tr>
									</thead>
									<tbody>
									<!-- <tr>
											 FORM FILTER -->
											<!--
											<form action="#">
												<td><input type="text" class="form-control input-sm" name="id" placeholder="staff id"></td>
												<td><input type="text" class="form-control input-sm" name="first_name" placeholder="first name"></td>
												<td><input type="text" class="form-control input-sm" name="last_name" placeholder="last name"></td>
												<td>
													<select name="branch_id" class="form-control input-sm">
														<option value="">All</option>
														<option value="1">Branch #1</option>
													</select>
												</td>
												<td>
													<select name="position_id" class="form-control input-sm">
														<option value="">All</option>
														<option value="1">Position #1</option>
													</select>
												</td>
												<td>
													<select name="gender" class="form-control input-sm">
														<option value="">All</option>
														<option value="0">Male</option>
														<option value="1">Female</option>
													</select>
												</td>
												<td><button class="btn btn-sm btn-default btn-block"><i class="fa fa-search"></i></button></td>
											</form>
										</tr> -->
	
	
									<!-- DATA START HERE -->
 	<?php
    include './../config.php';
    $client = mysqli_query($koneksi, "SELECT * from client");
    $no=1;
    foreach ($client as $row){
        $jenis_kelamin = $row['jk']=='P'?'Perempuan':'Laki laki';
        echo "<tr>
            <td>".$row['id_client']."</td>
            <td>".$row['username']."</td>
            <td>".$row['nama_depan']."</td>
            <td>".$row['nama_belakang']."</td>
            <td>".$row['tgl_lahir']."</td>
            <td>".$row['tgl_pernikahan']."</td>
            <td>".$row['email']."</td>
            <td>".$jenis_kelamin."</td>
            <td>".$row['no_hp']."</td>
			<td><a href='form-edit.php?username=$row[username]'>Edit</a>
                <a href='delete.php?username=$row[username]'>Delete</a>
			</td>
              </tr>";
        $no++;
    }
    ?>
    
    
										
											
									</tbody
								></table>
		  </div>
                           </table>
            <!-- Sampai Sini saja -->