<?php 
session_start();
include("config.php");
if (isset($_GET['id_konsultan']))
{
	$id_konsultan=$_GET['id_konsultan'];
}
else{
	$id_konsultan=$_SESSION['id_konsultan'];
}
$id_client=$_SESSION['id_client'];
$client=mysqli_query($koneksi,"select * from client where id_client=$id_client");
$row=mysqli_fetch_array($client);
$id_chat="chat".$id_client.$id_konsultan;
?>
<!DOCTYPE html>
<html>
   <head> 
     <!-- CSS -->
     <link href="css/chat.css" rel="stylesheet"/>
   </head>
   <body>
     <!-- HTML -->
     <div id="chatws">
       <div class="tabs">Romansi Chat</div>
       <div class="tabs" align="justify"><a href="index.php?halaman=progress">Kembali</a> </div>
       <div class="chat">
         <div id='message_box'>
           <!-- Display messages -->
         </div>
         <form id="msg_form">
           <input id="name" type="hidden" value="<?php echo $row['nama_depan'] ?>"  />
           <input id="message" type="text" placeholder="Message.." />
           <button type="submit" id="save" style="display:none">Send</button>
         </form>
       </div>
     </div>   
     <!-- jQuery -->
     <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
     <!-- Include Firebase Library -->
     <script src="https://cdn.firebase.com/js/client/2.2.3/firebase.js"></script>
     <!-- chats JavaScript -->
     <script type="text/javascript">
     	var idchat= "<?php echo $id_chat; ?>";
     </script>
     <script src="js/firebase.js"></script>  
   </body>
</html>