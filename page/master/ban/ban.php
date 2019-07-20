<?php

$result = mysqli_query($conn, "SELECT * FROM db_ban"); {
    echo mysqli_error($conn);
}
?>
</div>
<div class="panel-body">
    <a href="?page=ban&aksi=tambah" class="btn btn-primary" style="margin-bottom: 15px"><i class="fa fa-plus"></i>Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Ukuran</th>
                    <th>Grup</th>
                    <th>Alur Ban</th>
                    <th>Pola Telapak</th>
                    <th>Merek</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php

                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <th><?php echo $row["kode"]; ?></th>
                        <th><?php echo $row["ukuran"]; ?></th>
                        <th><?php echo $row["grup"]; ?></th>
                        <th><?php echo $row["alur_ban"]; ?></th>
                        <th><?php echo $row["pattern"]; ?></th>
                        <th><?php echo $row["brand"]; ?></th>
                        <th><?php echo $row["type"]; ?></th>
                        <th><?php echo $row["harga"]; ?></th>
                        <th>
                            <a href="?page=ban&aksi=edit&id=<?php echo $row['id'] ?>" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
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