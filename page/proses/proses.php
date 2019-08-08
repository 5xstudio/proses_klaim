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
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Klaim</th>
                    <th>Distributor</th>
                    <th>Tipe</th>
                    <th>Total Klaim</th>
                    <th>Status</th>
                    <th>Tgl Klaim</th>
                    <th>Keterangan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($klaim as $key => $v) : ?>
                    <tr>
                        <td><?= $v['no'] ?></td>
                        <td><?= $v['no_klaim'] ?></td>
                        <td><?= $v['nama_distributor'] ?></td>
                        <td><?= $v['grup'] ?></td>
                        <td class="text-right"><?= $v['total'] ?></td>
                        <td><span class="<?= $v['status'] == 'Done' ? 'label label-success' : '' ?>"><?= $v['status'] ?></span></td>
                        <td class="text-right"><?= $v['tgl_klaim'] ?></td>
                        <td data-toggle="tooltip" title="<?= $v['keterangan'] ?>"><?= strlen($v['keterangan']) >= 30 ? substr($v['keterangan'], 0, 30) . '...' : $v['keterangan'] ?></td>
                        <td>
                            <?php
                            if ($v['status'] == 'Open') : ?>
                                <a href="?page=klaim&aksi=edit&id_klaim=<?= $v['id_klaim'] ?>" class="btn btn-sm btn-success">Edit</a>
                                <button onclick="doDelete('<?= $v['id_klaim'] ?>')" class="btn btn-sm btn-danger">Delete</button>
                                <?php
                                if ($_SESSION['akses'] == 'TS') : ?>
                                    <button onclick="doneProcess('<?= $v['id_klaim'] ?>')" class="btn btn-sm btn-warning">Done</button>
                                <?php endif; ?>
                            <?php endif; ?>
                            <a href="?page=klaim&aksi=detail&id_klaim=<?= $v['id_klaim'] ?>&status=<?= $v['status'] ?>" class="btn btn-sm btn-info">Detail</a>
                            <?php if ($v['status'] == 'Done') : ?>
                                <button onclick="downloadExcel('<?= $v['id_klaim'] ?>')" class="btn btn-sm btn-success"><i class="fa fa-download"></i> Download</button>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
<script>
    function doneProcess(id_klaim) {
        if (confirm('Apakah anda yakin data ini sudah diproses?')) {
            $.ajax({
                url: 'function.php',
                data: {
                    type: 'process_done',
                    id_klaim: id_klaim
                },
                dataType: 'json',
                type: 'POST',
                success: function(json) {
                    if (json.status == 1) {
                        alert(json.message)
                        location.reload()
                    } else {
                        alert(json.message)
                    }
                },
                error: function() {
                    alert('Terjadi Kesalahan')
                }
            })
        }
    }

    function doDelete(id_klaim) {
        if (confirm('Apakah anda yakin akan menghapus data ini?')) {
            $.ajax({
                url: 'function.php',
                data: {
                    type: 'delete',
                    key: 'id_klaim',
                    value: id_klaim,
                    table: 'db_klaim'
                },
                dataType: 'json',
                type: 'POST',
                success: function(json) {
                    if (json.status == 1) {
                        alert(json.message)
                        location.reload()
                    } else {
                        alert(json.message)
                    }
                },
                error: function() {
                    alert('Terjadi Kesalahan')
                }
            })
        }
    }
</script>