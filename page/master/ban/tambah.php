<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 15px">
                <form role="form" method="POST">
                    <div class="form-group">
                        <label>Kode</label>
                        <input class="form-control" name="kode" />
                    </div>

                    <div class="form-group">
                        <label>Ukuran</label>
                        <input class="form-control" name="ukuran" />
                    </div>

                    <div class="form-group">
                        <label>Grup</label>
                        <select class="form-control" name="grup">
                            <option value="PCR">PCR</option>
                            <option value="MC">MC</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Alur Ban</label>
                        <input type="number" class="form-control" name="alur_ban" />
                    </div>

                    <div class="form-group">
                        <label>Pola Telapak</label>
                        <input class="form-control" name="pattern" />
                    </div>

                    <div class="form-group">
                        <label>Merek</label>
                        <select class="form-control" name="brand">
                            <option value="Achilles">Achilles</option>
                            <option value="Corsa">Corsa</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tipe</label>
                        <select class="form-control" name="type">
                            <option value="Tubeless">Tubeless</option>
                            <option value="Tubetipe">Tube Type</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input class="form-control" name="harga" />
                    </div>

                    <div>
                        <input type="submit" name="simpan" value="simpan" class="btn btn-primary" style="margin-top: 25px" style="">
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
$type = $_POST['type'];
$harga = $_POST['harga'];

$simpan = $_POST['simpan'];

if ($simpan) {
    $result = $conn->query("insert into db_ban (kode, ukuran, grup, alur_ban, pattern, brand, type, harga) values('$kode', '$ukuran', '$grup', '$alur_ban', '$pattern', '$brand', '$type', '$harga')");

    if ($result) {
        ?>
        <script type="text/javascript">
            setTimeout(function() {
                alert("Data Tersimpan");
                window.location.href = "?page=ban";
            }, 1000);
        </script>

    <?php
    }
}

?>