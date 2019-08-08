<?php

$result = mysqli_query($conn, "SELECT * FROM db_user"); {
    echo mysqli_error($conn);
}
?>
</div>
<div class="panel-body">
    <a href="?page=user&aksi=tambah" class="btn btn-primary" style="margin-bottom: 15px"><i class="fa fa-plus"></i>Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Akses</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                while ($row = $result->fetch_assoc()) {
                    $no++;
                    ?>
                    <tr>
                        <th><?php echo $no; ?></th>
                        <th><?php echo $row["username"]; ?></th>
                        <th><?php echo ucwords($row["nama"]); ?></th>
                        <th><?php echo $row["akses"]; ?></th>
                        <th>
                            <a href="?page=user&aksi=edit&id=<?php echo $row['id'] ?>" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                            <a onclick="return confirm ('Data akan di hapus, Anda Yakin ......?') " href="?page=ban&aksi=hapus&id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa fa-pencil"></i> Hapus</a>
                        </th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>
</div>
</div>