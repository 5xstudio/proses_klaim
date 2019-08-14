<?php

// GET
$sisa_alur = '';
$id_kerusakan = '';
$id_ban = '';
$id_toko = '';
$disposisi = '';
$percent = '';
$sebab = '';
$aksi = $_GET['aksi'];
if ($aksi == 'edit_detail') {
    $sql = " SELECT d.*,h.no_klaim,b.kode,b.ukuran,b.grup,b.alur_ban,k.kode_kerusakan,k.nama_kerusakan,k.sebab,k.disposisi,t.kode_toko,t.nama_toko 
    FROM db_klaim_detail d
    JOIN db_klaim h ON d.id_klaim = h.id_klaim
    JOIN db_ban b ON d.id_ban = b.id
    JOIN db_kerusakan k ON d.id_kerusakan = k.id_kerusakan
    JOIN db_toko t ON d.id_toko = t.id_toko
    WHERE d.id_klaim_detail = '{$_GET['id_klaim_detail']}'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);

    $sisa_alur = $row['sisa_alur'];
    $alur_ban = $row['alur_ban'];
    $id_toko = $row['id_toko'];
    $disposisi = $row['disposisi'];
    $sebab = $row['sebab'];
    $id_kerusakan = $row['id_kerusakan'];
    $id_ban = $row['id_ban'];
    $percent = round($sisa_alur / $alur_ban * 100,2);
    $aksi = 'edit';
}

$sqlklaim = "select * from db_klaim where id_klaim = " . $_GET['id_klaim'] . " ";
$q = mysqli_query($conn, $sqlklaim);
$header = mysqli_fetch_assoc($q);
$no_klaim = $header['no_klaim'];





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
                        <label>Toko</label>
                        <select name="id_toko"  class="form-control">
                            <option value="">Pilih Toko</option>
                            <?php foreach ($toko as $key => $d) : ?>
                                <option <?= $id_toko == $d['id_toko'] ? 'selected' : ''; ?> value="<?= $d['id_toko'] ?>"><?= $d['kode_toko'] . ' - ' . $d['nama_toko'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ban</label>
                        <select name="id_ban" id="id_ban" class="form-control">
                            <option value="">Pilih Ban</option>
                            <?php foreach ($ban as $key => $d) : ?>
                                <option <?= $id_ban == $d['id'] ? 'selected' : ''; ?> value="<?= $d['id'] ?>"><?= $d['kode'] . ' - ' . $d['ukuran'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <fieldset style="border:1px solid silver;padding:10px;border-radius:5px;">
                        <div class="form-group">
                            <label>Kerusakan</label>
                            <select name="id_kerusakan" id="id_kerusakan" class="form-control">
                                <option value="">Pilih Kerusakan</option>
                                <?php foreach ($data_kerusakan as $key => $d) : ?>
                                    <option <?= $id_kerusakan == $d['id_kerusakan'] ? 'selected' : ''; ?> value="<?= $d['id_kerusakan'] ?>"><?= $d['kode_kerusakan'] . ' - ' . $d['nama_kerusakan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Penyebab</label>
                                <input disabled class="form-control" id="sebab" name="sebab" value="<?= $sebab ?>" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Disposisi Klaim</label>
                                <input disabled class="form-control" id="disposisi" name="disposisi" value="<?= $disposisi ?>" />
                            </div>
                        </div>
                    </fieldset>
                    <label>Groove Depth</label>
                    <fieldset style="border:1px solid silver;padding:10px;border-radius:5px;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Alur Ban</label>
                                <input disabled class="form-control" id="alur_ban" name="alur_ban" value="<?= $alur_ban ?>" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Rem</label>
                                <input onkeyup="calcRemaining()" class="form-control" id="sisa_alur" name="sisa_alur" value="<?= $sisa_alur ?>" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Remaining (%)</label>
                                <input disabled class="form-control" id="percent" name="percent" value="<?=$percent?>" />
                            </div>
                        </div>
                    </fieldset>
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
<script>
    $(document).ready(() => {
        $("#id_ban").change((o) => {
            let id_ban = $("#id_ban").val()
            $.get('function.php?type=get_data_ban', {
                id_ban: id_ban
            }, (response) => {
                if (response.data) {
                    item = response.data
                    $("#alur_ban").val(item.alur_ban)

                }
            }, 'json')
        })

        $("#id_kerusakan").change((o) => {
            let id_kerusakan = $("#id_kerusakan").val()
            $.get('function.php?type=get_data_kerusakan', {
                id_kerusakan: id_kerusakan
            }, (response) => {
                if (response.data) {
                    item = response.data
                    $("#sebab").val(item.sebab)
                    $("#disposisi").val(item.disposisi)
                }
            }, 'json')
        })
    })

    function calcRemaining() {
        let baru = $("#alur_ban").val()
        let sisa_alur = $("#sisa_alur").val()

        let percent = (sisa_alur * 1) / (baru * 1) * 100
        $("#percent").val(percent.toFixed(2))

    }
</script>


<?php

// POST save
if (isset($_POST['simpan'])) {
    var_dump($_POST);
    // die;
    $id_ban = $_POST['id_ban'];
    $sisa_alur = $_POST['sisa_alur'];
    $id_klaim_detail = $_GET['id_klaim_detail'];
    $id_kerusakan = $_POST['id_kerusakan'];
    $id_klaim =  $_POST['id_klaim'];
    $id_toko = $_POST['id_toko'];
    // $sql = "INSERT into db_klaim_detail (id_ban, id_klaim, id_toko, id_kerusakan, keterangan, sisa_alur) 
    //     values('$id_ban', '$id_klaim', '$id_toko', '$id_kerusakan', '$keterangan', '$sisa_alur')";
    //     die;
    if ($_POST['aksi'] == 'tambah_detail') {
        // tambah
        echo $sql = "INSERT into db_klaim_detail (id_ban, id_klaim, id_toko, id_kerusakan, sisa_alur) 
        values('$id_ban', '$id_klaim', '$id_toko', '$id_kerusakan', '$sisa_alur')";
        die;
        $result = $conn->query($sql);
    } else {
        // edit
        $sql = "UPDATE db_klaim_detail set id_ban='$id_ban', id_klaim='{$id_klaim}', id_kerusakan='$id_kerusakan',sisa_alur='$sisa_alur' where id_klaim_detail='{$id_klaim_detail}' ";
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