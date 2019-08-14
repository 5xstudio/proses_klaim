<?php

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM db_ban where id='$id'");

$tampil = $result->fetch_assoc();

$lokasi = $tampil['brand'];
$type = $tampil['type'];
$serial_l = $tampil['serial_l'];
$serial_r = $tampil['serial_r'];

?>


<div class="panel panel-default">
    <div class="panel-heading">
        Edit Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10" style="margin-bottom: 15px">
                <form role="form" method="POST">
                    <div class="form-group">
                        <label>Kode</label>
                        <input class="form-control" name="kode" value="<?php echo $tampil['kode']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Ukuran</label>
                        <input class="form-control" name="ukuran" value="<?php echo $tampil['ukuran']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>grup</label>
                        <select class="form-control" name="grup">
                            <option value="PCR" <?php if ($lokasi == 'PCR') {
                                                    echo "selected";
                                                } ?>>PCR</option>
                            <option value="MC" <?php if ($lokasi == 'MC') {
                                                    echo "selected";
                                                } ?>>MC</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Alur Ban</label>
                        <input type="number" class="form-control" name="alur_ban" value="<?php echo $tampil['alur_ban']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Pola Telapak</label>
                        <input class="form-control" name="pattern" value="<?php echo $tampil['pattern']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Merek</label>
                        <select class="form-control" name="brand">
                            <option value="Achilles" <?php if ($lokasi == 'Achilles') {
                                                            echo "selected";
                                                        } ?>>Achilles</option>
                            <option value="Corsa" <?php if ($lokasi == 'Corsa') {
                                                        echo "selected";
                                                    } ?>>Corsa</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tipe</label>
                        <select class="form-control" name="type">
                            <option <?php if ($type == 'Tubeless') {
                                        echo "selected";
                                    } ?> value="Tubeless">Tubeless</option>
                            <option <?php if ($type == 'Tubetype') {
                                        echo "selected";
                                    } ?> value="Tubetipe">Tube Type</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input class="form-control" name="harga" value="<?php echo $tampil['harga']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Li</label>
                        <input class="form-control" name="serial_l" value="<?php echo $tampil['serial_l']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Si</label>
                        <input class="form-control" name="serial_r" value="<?php echo $tampil['serial_r']; ?>" />
                    </div>

                    <div>
                        <input type="submit" name="simpan" value="Perbarui" class="btn btn-primary" style="margin-top: 25px" style="">
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php
$kode = $_POST['kode'];
$ukuran = $_POST['ukuran'];
$grup = $_POST['grup'];
$alur_ban = $_POST['alur_ban'];
$pattern = $_POST['pattern'];
$brand = $_POST['brand'];
$serial_l = $_POST['serial_l'];
$serial_r = $_POST['serial_r'];
$type = $_POST['type'];
$harga = $_POST['harga'];

$simpan = $_POST['simpan'];

if ($simpan) {
    $result = $conn->query("update db_ban set kode='$kode', ukuran='$ukuran', grup='$grup', alur_ban='$alur_ban', pattern='$pattern', brand='$brand', type='$type', harga='$harga',serial_l='$serial_l',serial_r='$serial_r' where id='$id'");

    if ($result) {
        ?>
        <script type="text/javascript">
            setTimeout(function() {
                alert("Data Berhasil Diperbarui.............!");
                window.location.href = "?page=ban";
            }, 1000);
        </script>

    <?php
    }
}

?>