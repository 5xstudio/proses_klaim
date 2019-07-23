<?php

// GET
$sisa_alur = '';
$keterangan = '';
$kerusakan = '';
$id_ban = '';
$aksi = $_GET['aksi'];
$aksi = 'tambah';
if ($aksi == 'edit_detail') {
    $sql = "select d.*,h.no_klaim from db_klaim_detail d join db_klaim h on d.id_klaim = h.id_klaim where d.id_klaim_detail = '" . $_GET['id_klaim_detail'] . "' ";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);

    $sisa_alur = $row['sisa_alur'];
    $keterangan = $row['keterangan'];
    $kerusakan = $row['kerusakan'];
    $id_ban = $row['id_ban'];
    $aksi = 'edit';
}

$sqlklaim = "select * from db_klaim where id_klaim = " . $_GET['id_klaim'] . " ";
$q = mysqli_query($conn, $sqlklaim);
$header = mysqli_fetch_assoc($q);
$no_klaim = $header['no_klaim'];

$ban = [];
$sql = "select * from db_ban";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    $ban[] = $row;
}



?>
<a href="?page=klaim&aksi=detail&id_klaim=<?= $_GET['id_klaim'] ?>" class="btn btn-primary pull-right" style="margin-bottom: 15px"><i class="fa fa-arrow-left"></i> Back</a>
<div class="panel panel-default">
    <div class="panel-heading">
        Tambah / Edit Detail
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 15px">
                <form role="form" method="POST">
                    <div class="form-group">
                        <label>No Klaim</label>
                        <input readonly class="form-control" id="no_klaim" name="no_klaim" value="<?= $no_klaim ?>" />
                    </div>
                    <div class="form-group">
                        <label>Distributor</label>
                        <select name="id_ban" class="form-control">
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
                        <textarea class="form-control" rows="5" name="kerusakan"><?= $kerusakan ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="5" name="keterangan"><?= $keterangan ?></textarea>
                    </div>
                    <input type="hidden" name="aksi" value="<?= $aksi ?>" />
                    <input type="hidden" name="id_klaim" value="<?= $_GET['id_klaim'] ?>" />
                    <div>
                        <input type="submit" name="simpan" value="simpan" class="btn btn-primary" style="margin-top: 25px" style="">
                        <a href="?page=klaim" class="btn btn-primary pull-right" style="margin-top: 25px" style="">Kembali</a>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>


<?php

// POST save
if (isset($_POST['simpan'])) {
    $id_ban = $_POST['id_ban'];
    $sisa_alur = $_POST['sisa_alur'];
    $id_klaim_detail = $_POST['id_klaim_detail'];
    $kerusakan = $_POST['kerusakan'];
    $keterangan = $_POST['keterangan'];

    if ($_POST['aksi'] == 'tambah') {
        // tambah
        $sql = "INSERT into db_klaim_detail (id_ban, id_klaim, keterangan, kerusakan, sisa_alur) values('$id_ban', " . $_GET['id_klaim'] . ", '$keterangan', '$kerusakan', '$sisa_alur')";
        $result = $conn->query($sql);
    } else {
        // edit
        $sql = "UPDATE db_klaim set id_ban='$id_ban', id_klaim=" . $_GET['id_klaim'] . ", keterangan='$keterangan', kerusakan='$kerusakan',sisa_alur='$sisa_alur' where id_klaim_detail='" . $_GET['id_klaim_detail'] . "' ";
        $result = $conn->query($sql);
    }


    if ($result) {
        echo '<script type="text/javascript">
            setTimeout(function() {
                alert("Data Tersimpan");
                window.location.href = "?page=klaim&aksi=detail&id_klaim=' . $_GET['id_klaim'] . '";
            }, 1000);
        </script>';
    }
}
?>