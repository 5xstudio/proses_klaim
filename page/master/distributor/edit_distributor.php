<?php 
    
    $id = $_GET ['id_distributor'];

    $result = $conn -> query("SELECT * FROM db_distributor where id_distributor='$id'");

    $tampil = $result -> fetch_assoc ();

    $lokasi = $tampil['grup'];
    
 ?>


<div class="panel panel-default">
<div class="panel-heading">
	Edit Data Distributor
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-10" style="margin-bottom: 15px">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Kode Distributor</label>
                                            <input class="form-control" name="kode_distributor" value ="<?php echo $tampil ['kode_distributor'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Distributor</label>
                                            <input class="form-control" name="nama_distributor" value ="<?php echo $tampil ['nama_distributor'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Grup</label>
                                            <select class="form-control" name="grup">
                                                <option value="Internasional"<?php if ($lokasi == 'Internasional') {echo "selected";} ?>>Internasional</option>
                                                <option value="Lokal" <?php if ($lokasi == 'Lokal') {echo "selected";} ?>>Lokal</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" value ="<?php echo $tampil ['alamat'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Area</label>
                                            <input class="form-control" name="area" value ="<?php echo $tampil ['area'];?>" />
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
	$kode_distributor = $_POST ['kode_distributor'];
    $nama_distributor = $_POST ['nama_distributor'];
    $grup = $_POST ['grup'];
    $alamat = $_POST ['alamat'];
    $area = $_POST ['area'];
    $kota = $_POST ['kota'];
    $telepon = $_POST ['telepon'];

	$simpan = $_POST ['simpan'];

	if ($simpan){
			$result = $conn -> query("update db_distributor set kode_distributor='$kode_distributor', nama_distributor='$nama_distributor', grup='$grup', alamat='$alamat', area='$area', kota='$kota', telepon='$telepon' where id_distributor='$id'");

		if ($result) {
			?>
				<script type="text/javascript">
					setTimeout(function(){ 
						alert ("Data Berhasil Diperbarui.............!"); 
                        window.location.href="?page=distributor";
				}, 1000);
					

			</script>

			<?php
		}

	}

 ?>