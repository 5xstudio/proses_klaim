<?php

// GET
$no_klaim = '';
$tgl_klaim = '';
$id_ban = '';
$id_distributor = '';
$type = $_GET['aksi'];
$grup = 'PCR';
$aksi = 'tambah';
if ($type == 'edit_detail') {
    $sql = "select d.*,h.no_klaim from db_klaim_detail d join db_klaim h on d.id_klaim = h.id_klaim where d.id_klaim_detail = '" . $_GET['id_klaim_detail'] . "' ";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $no_klaim = $row['no_klaim'];
    $sisa_alur = $row['sisa_alur'];
    $keterangan = $row['keterangan'];
    $kerusakan = $row['kerusakan'];
    $id_ban = $row['id_ban'];
    $aksi = 'edit';
}

$ban = [];
$sql = "select * from db_ban";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    $ban[] = $row;
}



?>
<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 15px">
                <form role="form" method="POST">
                    <div class="form-group">
                        <label>No Klaim</label>
                        <input readonly class="form-control" id="sisa_alur" name="sisa_alur" value="<?= $no_klaim ?>" />
                    </div>
                    <div class="form-group">
                        <label>Distributor</label>
                        <select name="id_distributor" class="form-control">
                            <option value="">Pilih Ban</option>
                            <?php foreach ($ban as $key => $d) : ?>
                                <option <?= $id_ban == $d['id'] ? 'selected' : ''; ?> value="<?= $d['id'] ?>"><?= $d['ukuran'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sisa Alur<small style="font-style:italic"> (Jika baru, input 0)</small></label>
                        <input class="form-control" id="sisa_alur" name="sisa_alur" value="<?= $sisa_alur ?>" />
                    </div>
                    <div class="form-group">
                        <label>Kerusakan</label>
                        <textarea class="form-control" rows="5" id="kerusakan"><?=$kerusakan?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="5" id="keterangan"><?=$keterangan?></textarea>
                    </div>
                    <input type="hidden" value="<?=$aksi?>" />
                    <div>
                        <input type="submit" name="simpan" value="simpan" class="btn btn-primary" style="margin-top: 25px" style="">
                        <a href="?page=klaim" class="btn btn-primary pull-right" style="margin-top: 25px" style="">Kembali</a>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function() {
        let tgl = $("#tgl_klaim").val()
        if (tgl == '') {
            let dt = new Date()
            let local = dt.toISOString().split('T')[0]
            $("#tgl_klaim").val(local)
        }
    })
</script>

<?php
// print_r($_POST);
// echo $sql = "INSERT into db_klaim (no_klaim, grup, id_distributor, tgl_klaim) values('$no_klaim', '$grup', '$id_distributor', '$tgl_klaim')";
// die;
// POST save
if (isset($_POST['simpan'])) {
    $id_ban = $_POST['id_ban'];
    $sisa_alur = $_POST['sisa_alur'];
    $id_klaim_detail = $_POST['id_klaim_detail'];
    $kerusakan = $_POST['kerusakan'];
    $keterangan = $_POST['keterangan'];

    if ($_POST['aksi'] == 'tambah') {
        // tambah
        $sql = "INSERT into db_klaim_detail (id_ban, id_klaim, id_distributor, tgl_klaim) values('$no_klaim', '$grup', '$id_distributor', '$tgl_klaim')";
        $result = $conn->query($sql);
    } else {
        // edit
        $sql = "UPDATE db_klaim set grup='$grup', id_distributor='$id_distributor' where id_klaim='" . $_GET['id_klaim'] . "' ";
        $result = $conn->query($sql);
    }


    if ($result) {
        echo '<script type="text/javascript">
            setTimeout(function() {
                alert("Data Tersimpan");
                window.location.href = "?page=klaim";
            }, 1000);
        </script>';
    }
}
?>