<?php

// GET
$no_klaim = '';
$tgl_klaim = '';
$id_distributor = '';
$keterangan = '';
$type = $_GET['aksi'];
$grup = 'PCR';
if ($type == 'edit') {
    $sql = "select * from db_klaim where id_klaim = '" . $_GET['id_klaim'] . "' ";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $no_klaim = $row['no_klaim'];
    $tgl_klaim = $row['tgl_klaim'];
    $id_distributor = $row['id_distributor'];
    $grup = $row['grup'];
    $keterangan = $row['keterangan'];
}

$dist = [];
$sql = "select * from db_distributor";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    $dist[] = $row;
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
                        <input class="form-control" name="no_klaim" value="<?= $no_klaim ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label>Tgl Klaim</label>
                        <input class="form-control" id="tgl_klaim" name="tgl_klaim" value="<?= $tgl_klaim ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label>Distributor</label>
                        <select name="id_distributor" class="form-control">
                            <option value="">Pilih Distributor</option>
                            <?php foreach ($dist as $key => $d) : ?>
                                <option <?= $id_distributor == $d['id_distributor'] ? 'selected' : ''; ?> value="<?= $d['id_distributor'] ?>"><?= $d['nama_distributor'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Grup</label>
                        <select class="form-control" name="grup">
                            <option <?= $grup == 'PCR' ? 'selected' : ''; ?> value="PCR">PCR</option>
                            <option <?= $grup == 'MC' ? 'selected' : ''; ?> value="MC">MC</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="5" name="keterangan"><?=$keterangan?></textarea>
                    </div>
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
    $no_klaim = $_POST['no_klaim'];
    $grup = $_POST['grup'];
    $id_distributor = $_POST['id_distributor'];
    $tgl_klaim = $_POST['tgl_klaim'];
    $keterangan = $_POST['keterangan'];
    $simpan = $_POST['simpan'];

    if ($no_klaim == '') {
        $no_klaim = createNo();
    }


    if ($_GET['aksi'] == 'tambah') {
        // tambah
        $sql = "INSERT into db_klaim (no_klaim, grup, id_distributor, tgl_klaim, keterangan) values('$no_klaim', '$grup', '$id_distributor', '$tgl_klaim', '$keterangan')";
        $result = $conn->query($sql);
    } else {
        // edit
        $sql = "UPDATE db_klaim set grup='$grup', id_distributor='$id_distributor', keterangan='$keterangan' where id_klaim='" . $_GET['id_klaim'] . "' ";
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