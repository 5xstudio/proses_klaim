<?php 
	$id = $_GET ['id'];
	$conn -> query("delete from db_ban where id = '$id'");
 ?>

 <script type="text/javascript">
 	 window.location.href="?page=ban";
 </script>