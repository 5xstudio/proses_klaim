<?php 
	$id = $_GET ['id_kerusakan'];
	$conn -> query("delete from db_kerusakan where id_kerusakan = '$id'");

 ?>

 <script type="text/javascript">
 	 window.location.href="?page=kerusakan";
 </script>