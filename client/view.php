<?php
include ("config.php");

  $query =mysqli_query($koneksi,"SELECT * FROM chat ORDER BY id DESC");

  while( $data = $query->fetch_array() ){
?>
<div id="chat_data">
    <span><?php echo $data['username']; ?></span>:
    <span><?php echo $data['message']; ?></span>
    <span><?php echo $data['date']; ?></span>
    <hr>
</div>
<?php
  }
?>
