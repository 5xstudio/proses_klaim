<?php 

$result = mysqli_query($conn, "SELECT * FROM db_kerusakan" );
    {
            echo mysqli_error($conn);
    }
 ?>


<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class ="panel-heading">
                             Data Kerusakan

                        </div>
                        <div class="panel-body">
                            <a href="?page=kerusakan&aksi=tambah_kerusakan" class="btn btn-primary" style="margin-bottom: 15px">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover"  id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Kerusakan</th>
                                            <th>Nama Kerusakan</th>
                                            <th>Sebab</th>
                                            <th>Disposisi</th>
                                            <th>Keterangan</th>
                                            <th>Pilihan</th>                               
                                        </tr>
                                    </thead>
                                      <tbody>
                                    <?php
                                      
                                    while($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                            <th><?php echo $row["kode_kerusakan"]; ?></th>
                                            <th><?php echo $row["nama_kerusakan"]; ?></th>
                                            <th><?php echo $row["sebab"]; ?></th>
                                            <th><?php echo $row["disposisi"]; ?></th>
                                            <th><?php echo $row["keterangan"]; ?></th>
                                            <th>
                                                <a href="?page=kerusakan&aksi=edit&id_kerusakan=<?php echo $row ['id_kerusakan'] ?>" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                                <a onclick="return confirm ('Data akan di hapus, Anda Yakin ......?') " href="?page=kerusakan&aksi=hapus&id_kerusakan=<?php echo $row ['id_kerusakan']; ?>" class="btn btn-danger"><i class="fa fa-pencil"></i> Hapus</a>



                                            </th>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
</div>
