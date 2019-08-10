<?php
$klaim = [];
// $sql = " SELECT k.*,d.nama_distributor, coalesce(dt.total,0) as total, coalesce(dt.ganti,0) as ganti, coalesce(dt.tolak,0) as tolak
//     FROM db_klaim k
//     INNER JOIN db_distributor d ON k.id_distributor=d.id_distributor
//     LEFT JOIN (
//         SELECT *, if(`status` = 'Tolak',1,0) AS tolak, if(`status` = 'Ganti',1,0) AS ganti, COUNT(id_klaim_detail) AS total  FROM db_klaim_detail GROUP BY id_klaim
//     ) AS dt ON k.id_klaim = dt.id_klaim ";
$sql = " SELECT kl.*,dis.kode_distributor,dis.nama_distributor from
(SELECT d.*,h.no_klaim,b.kode,b.ukuran,b.grup,b.alur_ban,k.kode_kerusakan,k.nama_kerusakan,k.sebab,k.disposisi,t.kode_toko,t.nama_toko,h.`status`,
sum(if(k.disposisi = 'Tolak',1,0)) AS tolak, sum(if(k.disposisi = 'Ganti',1,0)) AS ganti,h.tgl_klaim,if(h.`status` = 'Done',DATE(tgl_selesai),'') AS tgl_selesai,h.id_distributor,count(d.id_klaim_detail) as total_klaim
FROM db_klaim_detail d
JOIN db_klaim h ON d.id_klaim = h.id_klaim
JOIN db_ban b ON d.id_ban = b.id
JOIN db_kerusakan k ON d.id_kerusakan = k.id_kerusakan
JOIN db_toko t ON d.id_toko = t.id_toko
GROUP BY h.no_klaim) AS kl
JOIN db_distributor dis ON kl.id_distributor = dis.id_distributor ";
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
        Monitoring Klaim
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Referensi</th>
                        <th>Tgl Klaim</th>
                        <th>Distributor</th>
                        <th>Tipe</th>
                        <th>Total Klaim</th>
                        <th>Ganti</th>
                        <th>Tolak</th>
                        <th>Status Klaim</th>
                        <th>Tgl Selesai</th>
                        <th>Keterangan</th>
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
                            <td class="text-right"><?= $v['total_klaim'] ?></td>
                            <td class="text-right"><?= $v['ganti'] ?></td>
                            <td class="text-right"><?= $v['tolak'] ?></td>
                            <td class=""><span class="<?= $v['status'] == 'Done' ? 'label label-success' : '' ?>"><?= $v['status'] ?></span></td>
                            <td class=""><span class="">
                                    <?= $v['status'] == 'Done' ? date('Y-m-d', strtotime($v['tgl_selesai'])) : '' ?>
                                </span></td>
                            <td data-toggle="tooltip" title="<?= $v['keterangan'] ?>"><?= strlen($v['keterangan']) >= 30 ? substr($v['keterangan'], 0, 30) . '...' : $v['keterangan'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>