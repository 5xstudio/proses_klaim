<?php
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
                        <input class="form-control" name="no_klaim" readonly />
                    </div>
                    <div class="form-group">
                        <label>Tgl Klaim</label>
                        <input class="form-control" id="tgl_klaim" name="tgl_klaim" readonly />
                    </div>
                    <div class="form-group">
                        <label>Distributor</label>
                        <select name="id_distributor" class="form-control">
                            <option value="">Pilih Distributor</option>
                            <?php foreach ($dist as $key => $d) : ?>
                                <option value="<?= $d['id_distributor'] ?>"><?= $d['nama_distributor'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Grup</label>
                        <select class="form-control" name="grup">
                            <option value="PCR">PCR</option>
                            <option value="MC">MC</option>
                        </select>
                    </div>
                    <input type="hidden" name="type" value="add" />
                    <div>
                        <input type="submit" name="simpan" value="simpan" class="btn btn-primary" style="margin-top: 25px" style="">
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

$no_klaim = $_POST['no_klaim'];
$grup = $_POST['grup'];
$id_distributor = $_POST['id_distributor'];
$tgl_klaim = $_POST['tgl_klaim'];
$simpan = $_POST['simpan'];

if ($no_klaim == '') {
    $no_klaim = createNo();
}

if ($simpan) {
    echo $sql = "insert into db_klaim (no_klaim, grup, id_distributor, tgl_klaim) values('$no_klaim', '$grup', '$id_distributor', '$tgl_klaim')";
    $result = $conn->query($sql);

    if ($result) {
        ?>
        <script type="text/javascript">
            setTimeout(function() {
                alert("Data Tersimpan");
                window.location.href = "?page=klaim";
            }, 1000);
        </script>

    <?php
    }
}

?>