<h2>List Client</h2>
<table border="1">
    <tr>
    <th>NO</th><th>ID Client</th><th>Username</th><th>Nama</th><th>Tanggal Lahir</th><th>Tanggal Pernikahan</th><th>Email</th><th>Jenis Kelamin</th><th>NO HP</th>
    </tr>
    <?php
    include 'config.php';
    $client = mysqli_query($koneksi, "SELECT * from client");
    $no=1;
    foreach ($client as $row){
        $jenis_kelamin = $row['jk']=='P'?'Perempuan':'Laki laki';
        echo "<tr>
            <td>$no</td>
            <td>".$row['id_client']."</td>
            <td>".$row['username']."</td>
            <td>".$row['nama_depan']." ".$row['nama_belakang']."</td>
            <td>".$row['tgl_lahir']."</td>
            <td>".$row['tgl_pernikahan']."</td>
            <td>".$row['email']."</td>
            <td>".$jenis_kelamin."</td>
            <td>".$row['no_hp']."</td>
              </tr>";
        $no++;
    }
    ?>
</table>