<?php
$klaim = [];
$sql = " SELECT d.*,b.ukuran from db_klaim_detail d join db_ban b on d.id_ban = b.id where d.id_klaim = '".$_GET['id_klaim']."' ";
$query = mysqli_query($conn, $sql);
$no = 1;
while ($row = mysqli_fetch_assoc($query)) {
    $row['no'] = $no;
    $klaim[] = $row;
    $no++;
}

// print_r($klaim);
// die;
?>
</div>
<div class="panel-body">
    <a href="?page=klaim&aksi=tambah" class="btn btn-primary" style="margin-bottom: 15px"><i class="fa fa-plus"></i>Tambah Data</a>
    <a href="?page=klaim&aksi=download" class="btn btn-primary pull-right" style="margin-bottom: 15px"><i class="fa fa-file-excel-o"></i> Import Excel</a>
    <a href="?page=klaim&aksi=import" class="btn btn-success pull-right" style="margin-bottom: 15px;margin-right:1rem;"><i class="fa fa-download"></i> Download Template</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Ukuran</th>
                    <th colspan="2">Sisa Alur</th>
                    <th rowspan="2">Kerusakan</th>
                    <th rowspan="2">Keterangan</th>
                    <th rowspan="2">Opsi</th>
                </tr>
                <tr>
                    <th>New</th>
                    <th>CL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($klaim as $key => $v) : ?>
                    <tr>
                        <td><?=$v['no']?></td>
                        <td><?=$v['ukuran']?></td>
                        <td class="text-center"><?=$v['sisa_alur'] == 0 ? '<i class="fa fa-check"></i>' : '' ?></td>
                        <td><?=$v['sisa_alur'] != 0 ? $v['sisa_alur'] : '' ?></td>
                        <td><?=$v['kerusakan']?></td>
                        <td><?=$v['keterangan']?></td>
                        <td>
                            <a href="?page=klaim&aksi=edit_detail&id_klaim=<?=$_GET['id_klaim']?>&id_klaim_detail=<?=$v['id_klaim_detail']?>" class="btn btn-sm btn-success">Edit</a>
                            <a href="?page=klaim&aksi=hapus_detail&id_klaim_detail=<?=$v['id_klaim_detail']?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
</div>
</div>