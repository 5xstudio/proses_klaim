<?php 
	$id = $_GET ['id_toko'];
	$conn -> query("delete from db_toko where id_toko = '$id'");

 ?>

 <script type="text/javascript">
 	 window.location.href="?page=toko";
 </script>