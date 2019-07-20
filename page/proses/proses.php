<?php
$klaim = [];
$sql = " SELECT k.*,d.nama_distributor, coalesce(dt.total,0) as total
    FROM db_klaim k
    INNER JOIN db_distributor d ON k.id_distributor=d.id_distributor
    LEFT JOIN (
    SELECT id_klaim, COUNT(*) AS total
    FROM db_klaim_detail
    GROUP BY id_klaim) AS dt ON k.id_klaim = dt.id_klaim ";
$query = mysqli_query($conn, $sql);
$no = 1;
while ($row = mysqli_fetch_assoc($query)) {
    $row['no'] = $no;
    $klaim[] = $row;
    $no++;
}

?>
</div>
<div class="panel-body">
    <a href="?page=klaim&aksi=tambah" class="btn btn-primary" style="margin-bottom: 15px"><i class="fa fa-plus"></i>Tambah Data</a>
    <a href="?page=klaim&aksi=import" class="btn btn-primary pull-right" style="margin-bottom: 15px"><i class="fa fa-file-excel-o"></i> Import Excel</a>
    <a href="?page=klaim&aksi=import" class="btn btn-success pull-right" style="margin-bottom: 15px;margin-right:1rem;"><i class="fa fa-download"></i> Download Template</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Klaim</th>
                    <th>Distributor</th>
                    <th>Tipe</th>
                    <th>Total Klaim</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($klaim as $key => $v) : ?>
                    <tr>
                        <td><?=$v['no']?></td>
                        <td><?=$v['no_klaim']?></td>
                        <td><?=$v['nama_distributor']?></td>
                        <td><?=$v['grup']?></td>
                        <td class="text-right"><?=$v['total']?></td>
                        <td>
                            <button class="btn btn-sm btn-success">Edit</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
</div>
</div>