<div class="panel panel-default">
<div class="panel-heading">
	Tambah Data Toko
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 15px">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Kode Toko</label>
                                            <input class="form-control" name="kode_toko" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Toko</label>
                                            <input class="form-control" name="nama_toko" />
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" />
                                        </div>

                                        <div class="form-group">
                                            <label>Kota</label>
                                            <input class="form-control" name="kota" />
                                        </div>

                                        <div class="form-group">
                                            <label>Telepon</label>
                                            <input class="form-control" name="telepon" />
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
	$kode_toko = $_POST ['kode_toko'];
    $nama_toko = $_POST ['nama_toko'];
    $alamat = $_POST ['alamat'];
	$kota = $_POST ['kota'];
	$telepon = $_POST ['telepon'];

	$simpan = $_POST ['simpan'];

	if ($simpan){
			$result = $conn -> query("insert into db_toko (kode_toko, nama_toko, alamat, kota, telepon) values('$kode_toko', '$nama_toko', '$alamat', '$kota', '$telepon')");


		if ($result) {
			?>
				<script type="text/javascript">
					setTimeout(function(){ 
						alert ("Data Tersimpan"); window.location.href="?page=toko";
				}, 1000);
					

			</script>

			<?php
		}


	}

 ?>