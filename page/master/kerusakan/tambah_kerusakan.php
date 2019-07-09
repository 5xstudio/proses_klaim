<div class="panel panel-default">
<div class="panel-heading">
	Tambah Data Kerusakan
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 15px">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Kode Kerusakan</label>
                                            <input class="form-control" name="kode_kerusakan" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Kerusakan</label>
                                            <input class="form-control" name="nama_kerusakan" />
                                        </div>

                                        <div class="form-group">
                                            <label>Sebab</label>
                                            <select class="form-control" name="sebab">
                                                <option value="Pabrik">Pabrik</option>
                                                <option value="Pemakai">Pemakai</option>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Disposisi</label>
                                            <select class="form-control" name="disposisi">
                                                <option value="Ganti">Ganti</option>
                                                <option value="Tolak">Tolak</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input class="form-control" name="keterangan" />
                                        </div>

                                            <div>
                                            	<input type="submit" name="simpan" value="simpan" class="btn btn-primary"style="margin-top: 25px" style="">
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
			$result = $conn -> query("insert into db_kerusakan (kode_kerusakan, nama_kerusakan, sebab, disposisi, keterangan) values('$kode_kerusakan', '$nama_kerusakan', '$sebab', '$disposisi', '$keterangan')");


		if ($result) {
			?>
				<script type="text/javascript">
					setTimeout(function(){ 
						alert ("Data Tersimpan"); window.location.href="?page=kerusakan";
				}, 1000);
					

			</script>

			<?php
		}


	}

 ?>