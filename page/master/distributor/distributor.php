<?php 

$result = mysqli_query($conn, "SELECT * FROM db_distributor" );
    {
            echo mysqli_error($conn);
    }
 ?>


<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class ="panel-heading">
                             Data Distributor

                        </div>
                        <div class="panel-body">
                            <a href="?page=distributor&aksi=tambah" class="btn btn-primary" style="margin-bottom: 15px">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover"  id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Distributor</th>
                                            <th>Nama Distributor</th>
                                            <th>Grup</th>
                                            <th>Alamat</th>
                                            <th>Area</th>
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
                                            <th><?php echo $row["kode_distributor"]; ?></th>
                                            <th><?php echo $row["nama_distributor"]; ?></th>
                                            <th><?php echo $row["grup"]; ?></th>
                                            <th><?php echo $row["alamat"]; ?></th>
                                            <th><?php echo $row["area"]; ?></th>
                                            <th><?php echo $row["kota"]; ?></th>
                                            <th><?php echo $row["telepon"]; ?></th>
                                            <th>
                                                <a href="?page=distributor&aksi=edit&id_distributor=<?php echo $row ['id_distributor'] ?>" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                                <a onclick="return confirm ('Data akan di hapus, Anda Yakin ......?') " href="?page=distributor&aksi=hapus&id_distributor=<?php echo $row ['id_distributor']; ?>" class="btn btn-danger"><i class="fa fa-pencil"></i> Hapus</a>



                                            </th>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
</div>
