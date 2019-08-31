<?php
$klaim = [];
$sql = " SELECT d.*,b.*,h.no_klaim,h.status,h.tgl_klaim,dis.nama_distributor,t.* FROM db_klaim_detail d
JOIN db_klaim h ON d.id_klaim = h.id_klaim
JOIN db_distributor dis ON h.id_distributor = dis.id_distributor
JOIN db_ban b ON d.id_ban = b.id
JOIN db_toko t ON d.id_toko = t.id_toko ";
$query = mysqli_query($conn, $sql);
$no = 1;
while ($row = mysqli_fetch_assoc($query)) {
    $row['no'] = $no;
    $klaim[] = $row;
    $no++;
}

?>
<div class="panel panel-default">
    <div class="panel-heading">
        Summary Klaim
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div class="col-md-12">
                <label class="col-md-1">Tgl Awal</label>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="date" class="form-control" id="start" name="start" value="<?= $alur_ban ?>" />
                    </div>
                </div>
                <label class="col-md-1">Tgl Akhir</label>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="date" class="form-control" id="end" name="end" value="<?= $alur_ban ?>" />
                    </div>
                </div>
                <button onclick="exportExcel()" class="btn btn-success" style="margin-bottom: 15px"><i class="fa fa-file-excel-o"></i> Export</button><br>

            </div>
            <br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">No Klaim</th>
                        <th rowspan="2">Tgl Klaim</th>
                        <th rowspan="2">Distributor</th>
                        <th rowspan="2">Tipe</th>
                        <th rowspan="2">Toko</th>
                        <th rowspan="2">Status</th>
                        <th colspan="5">Tyre Profile</th>
                    </tr>
                    <tr>
                        <th>Kode</th>
                        <th>Tyre</th>
                        <th>Brand</th>
                        <th>Pattern</th>
                        <th>Serial</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($klaim as $key => $v) : ?>
                        <tr>
                            <td><?= $v['no'] ?></td>
                            <td><?= $v['no_klaim'] ?></td>
                            <td><?= $v['tgl_klaim'] ?></td>
                            <td><?= $v['nama_distributor'] ?></td>
                            <td><?= $v['grup'] ?></td>
                            <td class=""><?= $v['nama_toko'] ?></td>
                            <td><?= $v['status'] ?></td>
                            <td class=""><?= $v['kode'] ?></td>
                            <td class=""><?= $v['ukuran'] ?></td>
                            <td class=""><?= $v['brand'] ?></td>
                            <td class=""><?= $v['pattern'] ?></td>
                            <td class=""><?= $v['serial_l'] . ' - ' . $v['serial_r'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function exportExcel() {
        var s = $("#start").val()
        var e = $("#end").val()
        window.open('function.php?type=export_summary&s=' + s + '&e=' + e)
    }
</script>