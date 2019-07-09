<div class="panel panel-default">
<div class="panel-heading">
	Tambah Data Distributor
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 15px">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Kode Distributor</label>
                                            <input class="form-control" name="kode_distributor" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Distributor</label>
                                            <input class="form-control" name="nama_distributor" />
                                        </div>

                                        <div class="form-group">
                                            <label>Grup</label>
                                            <select class="form-control" name="grup">
                                                <option value="Internasional">Internasional</option>
                                                <option value="Lokal">Lokal</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" />
                                        </div>

                                        <div class="form-group">
                                            <label>Area</label>
                                            <input class="form-control" name="area" />
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
	$kode_distributor = $_POST ['kode_distributor'];
    $nama_distributor = $_POST ['nama_distributor'];
    $grup = $_POST ['grup'];
    $alamat = $_POST ['alamat'];
	$area = $_POST ['area'];
	$kota = $_POST ['kota'];
	$telepon = $_POST ['telepon'];

	$simpan = $_POST ['simpan'];

	if ($simpan){
			$result = $conn -> query("insert into db_distributor (kode_distributor, nama_distributor, grup, alamat, area, kota, telepon) values('$kode_distributor', '$nama_distributor', '$grup', '$alamat', '$area', '$kota', '$telepon')");


		if ($result) {
			?>
				<script type="text/javascript">
					setTimeout(function(){ 
						alert ("Data Tersimpan"); window.location.href="?page=distributor";
				}, 1000);
					

			</script>

			<?php
		}


	}

 ?>