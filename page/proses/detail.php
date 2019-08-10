<?php
$klaim = [];
// $sql = " SELECT d.*,b.ukuran from db_klaim_detail d join db_ban b on d.id_ban = b.id where d.id_klaim = '" . $_GET['id_klaim'] . "' ";
$sql = " SELECT d.*,h.no_klaim,b.kode,b.ukuran,b.grup,b.alur_ban,k.kode_kerusakan,k.nama_kerusakan,k.sebab,k.disposisi,t.kode_toko,t.nama_toko,h.status 
FROM db_klaim_detail d
JOIN db_klaim h ON d.id_klaim = h.id_klaim
JOIN db_ban b ON d.id_ban = b.id
JOIN db_kerusakan k ON d.id_kerusakan = k.id_kerusakan
JOIN db_toko t ON d.id_toko = t.id_toko
WHERE h.id_klaim = '{$_GET['id_klaim']}' ";
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
    <a href="?page=klaim&aksi=tambah_detail&id_klaim=<?= $_GET['id_klaim'] ?>" class="btn btn-primary" style="margin-bottom: 15px" <?=$_GET['status'] == 'Done' ? 'disabled' : '' ?> ><i class="fa fa-plus"></i>Tambah Data</a>
    <a href="?page=klaim&aksi=import" class="btn btn-primary" style="margin-bottom: 15px" <?=$_GET['status'] == 'Done' ? 'disabled' : '' ?>><i class="fa fa-file-excel-o"></i> Import Excel</a>
    <a href="tcs.xls" class="btn btn-success" style="margin-bottom: 15px;margin-right:1rem;" <?=$_GET['status'] == 'Done' ? 'disabled' : '' ?>><i class="fa fa-download"></i> Download Template</a>
    <a href="?page=klaim" class="btn btn-primary pull-right" style="margin-bottom: 15px"><i class="fa fa-arrow-left"></i> Back</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Ukuran</th>
                    <th colspan="2">Sisa Alur</th>
                    <th rowspan="2">Kerusakan</th>
                    <th rowspan="2">Penyebab</th>
                    <th rowspan="2">Disposisi</th>
                    <th rowspan="2">Toko</th>
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
                        <td><?= $v['no'] ?></td>
                        <td><?= $v['ukuran'] ?></td>
                        <td><?= $v['alur_ban    '] ?></td>
                        <td><?= $v['sisa_alur'] ?></td>
                        <td><?= $v['nama_kerusakan'] ?></td>
                        <td><?= $v['sebab'] ?></td>
                        <td><?= $v['disposisi'] ?></td>
                        <td><?= $v['nama_toko'] ?></td>
                        <td><?= $v['keterangan'] ?></td>
                        <td><?php
                            if ($v['status'] == 'Open') : ?>
                                <a href="?page=klaim&aksi=edit_detail&id_klaim=<?= $_GET['id_klaim'] ?>&id_klaim_detail=<?= $v['id_klaim_detail'] ?>" class="btn btn-sm btn-success">Edit</a>
                                <button onclick="doDelete('<?= $v['id_klaim_detail'] ?>')" class="btn btn-sm btn-danger">Hapus</button>
                                <?php if ($_SESSION['akses'] == 'TS') : ?>
                                    <!-- <button onclick="showModal('<?= $v['id_klaim_detail'] ?>')" class="btn btn-sm btn-warning">Proses</button> -->
                                <?php endif; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
</div>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Proses</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="Pending">Pending</option>
                            <option value="Ganti">Ganti</option>
                            <option value="Tolak">Tolak</option>
                        </select>
                        <input type="hidden" id="id_klaim_detail" name="id_klaim_detail" />
                    </div>

                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="saveDetailStatus()">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<script>
    function showModal(id_klaim_detail) {
        $("#id_klaim_detail").val(id_klaim_detail)
        $.get('function.php', {
            'type': 'show_detail',
            'id_klaim_detail': id_klaim_detail
        }, (json) => {
            $("#status").val(json.data.status)
        }, 'json')
        $("#myModal").modal('show')
    }

    function saveDetailStatus() {
        $("#myModal").modal('hide')
        $.ajax({
            url: 'function.php',
            data: {
                type: 'save_detail_status',
                id_klaim_detail: $("#id_klaim_detail").val(),
                status: $("#status").val()
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

    function doDelete(id_klaim_detail) {
        if (confirm('Apakah anda yakin akan menghapus data ini?')) {
            $.ajax({
                url: 'function.php',
                data: {
                    type: 'delete',
                    key: 'id_klaim_detail',
                    value: id_klaim_detail,
                    table: 'db_klaim_detail'
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