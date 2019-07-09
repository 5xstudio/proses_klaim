<?php 

$result = mysqli_query($conn, "SELECT * FROM db_toko" );
    {
            echo mysqli_error($conn);
    }
 ?>


<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class ="panel-heading">
                             Data Toko

                        </div>
                        <div class="panel-body">
                            <a href="?page=toko&aksi=tambah" class="btn btn-primary" style="margin-bottom: 15px">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover"  id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Toko</th>
                                            <th>Nama Toko</th>
                                            <th>Alamat</th>
                                            <th>Kota</th>
                                            <th>Telepon</th>
                                            <th>Pilihan</th>                              
                                        </tr>
                                    </thead>
                                      <tbody>
                                    <?php
                                      
                                    while($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                            <th><?php echo $row["kode_toko"]; ?></th>
                                            <th><?php echo $row["nama_toko"]; ?></th>
                                            <th><?php echo $row["alamat"]; ?></th>
                                            <th><?php echo $row["kota"]; ?></th>
                                            <th><?php echo $row["telepon"]; ?></th>
                                            <th>
                                                <a href="?page=toko&aksi=edit&id_toko=<?php echo $row ['id_toko'] ?>" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                                <a onclick="return confirm ('Data akan di hapus, Anda Yakin ......?') " href="?page=toko&aksi=hapus&id_toko=<?php echo $row ['id_toko']; ?>" class="btn btn-danger"><i class="fa fa-pencil"></i> Hapus</a>



                                            </th>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
</div>
