<?php 
	$id = $_GET ['id_distributor'];
	$conn -> query("delete from db_distributor where id_distributor = '$id'");

 ?>

 <script type="text/javascript">
 	 window.location.href="?page=distributor";
 </script>