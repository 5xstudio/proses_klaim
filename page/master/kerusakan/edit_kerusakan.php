<?php 
    
    $id = $_GET ['id_kerusakan'];

    $result = $conn -> query("SELECT * FROM db_kerusakan where id_kerusakan='$id'");

    $tampil = $result -> fetch_assoc ();

    $lokasi = $tampil['sebab'];
    $type = $tampil['disposisi'];
    
 ?>


<div class="panel panel-default">
<div class="panel-heading">
	Edit Data Kerusakan
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-10" style="margin-bottom: 15px">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Kode Kerusakan</label>
                                            <input class="form-control" name="kode_kerusakan" value ="<?php echo $tampil ['kode_kerusakan'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kerusakan</label>
                                            <input class="form-control" name="nama_kerusakan" value ="<?php echo $tampil ['nama_kerusakan'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Sebab</label>
                                            <select class="form-control" name="sebab">
                                                <option value="Pabrik"<?php if ($lokasi == 'Pabrik') {echo "selected";} ?>>Pabrik</option>
                                                <option value="Pemakai" <?php if ($lokasi == 'Pemakai') {echo "selected";} ?>>Pemakai</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Disposisi</label>
                                            <select class="form-control" name="disposisi">
                                                <option value="Ganti"<?php if ($type == 'Ganti') {echo "selected";} ?>>Ganti</option>
                                                <option value="Tolak" <?php if ($type == 'Tolak') {echo "selected";} ?>>Tolak</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input class="form-control" name="keterangan" value ="<?php echo $tampil ['keterangan'];?>" />
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
	$kode_kerusakan = $_POST ['kode_kerusakan'];
    $nama_kerusakan = $_POST ['nama_kerusakan'];
    $sebab = $_POST ['sebab'];
    $disposisi = $_POST ['disposisi'];
	$keterangan = $_POST ['keterangan'];

	$simpan = $_POST ['simpan'];

	if ($simpan){
			$result = $conn -> query("update db_kerusakan set kode_kerusakan='$kode_kerusakan', nama_kerusakan='$nama_kerusakan', sebab='$sebab', disposisi='$disposisi', keterangan='$keterangan' where id_kerusakan='$id'");

		if ($result) {
			?>
				<script type="text/javascript">
					setTimeout(function(){ 
						alert ("Data Berhasil Diperbarui.............!"); 
                        window.location.href="?page=kerusakan";
				}, 1000);
					

			</script>

			<?php
		}


	}

 ?>