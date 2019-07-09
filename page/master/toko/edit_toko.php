<?php 
    
    $id = $_GET ['id_toko'];

    $result = $conn -> query("SELECT * FROM db_toko where id_toko='$id'");

    $tampil = $result -> fetch_assoc ();

    
 ?>


<div class="panel panel-default">
<div class="panel-heading">
	Edit Data Toko
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-10" style="margin-bottom: 15px">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Kode Toko</label>
                                            <input class="form-control" name="kode_toko" value ="<?php echo $tampil ['kode_toko'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Toko</label>
                                            <input class="form-control" name="nama_toko" value ="<?php echo $tampil ['nama_toko'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" value ="<?php echo $tampil ['alamat'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Kota</label>
                                            <input class="form-control" name="kota" value ="<?php echo $tampil ['kota'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Telepon</label>
                                            <input class="form-control" name="telepon" value ="<?php echo $tampil ['telepon'];?>" />
                                        </div>

                                            <div>
                                            	<input type="submit" name="simpan" value="Perbarui" class="btn btn-primary"style="margin-top: 25px" style="">
                                            </div>
                                        </div> 
                                    </form>                                       
                            </div>
</div>
</div>
</div>

<?php 
	$kode_toko = $_POST ['kode_toko'];
    $nama_toko = $_POST ['nama_toko'];
    $alamat = $_POST ['alamat'];
	$kota = $_POST ['kota'];
	$telepon = $_POST ['telepon'];

	$simpan = $_POST ['simpan'];

	if ($simpan){
			$result = $conn -> query("update db_toko set kode_toko='$kode_toko', nama_toko='$nama_toko', alamat='$alamat', kota='$kota', telepon='$telepon' where id_toko='$id'");

		if ($result) {
			?>
				<script type="text/javascript">
					setTimeout(function(){ 
						alert ("Data Berhasil Diperbarui.............!"); 
                        window.location.href="?page=toko";
				}, 1000);
					

			</script>

			<?php
		}

	}

 ?>