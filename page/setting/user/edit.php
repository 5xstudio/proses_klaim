<?php

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM db_user where id='$id'");

$tampil = $result->fetch_assoc();
// var_dump($tampil);die;

$usernaem = $tampil['uername'];
$nama = $tampil['nama'];
$akses = $tampil['akses'];

$aks = ['TS', 'Distributor'];

?>


<div class="panel panel-default">
    <div class="panel-heading">
        <?= ucwords($_GET['aksi']) ?> Data
    </div>
    <div class="panel-body">
        <a href="?page=user" class="btn btn-primary pull-right" style="margin-bottom: 15px"><i class="fa fa-arrow-left"></i> Back</a><br>
        <div class="row">
            <div class="col-md-10" style="margin-bottom: 15px">
                <form method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" value="<?php echo $tampil['username']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Akses</label>
                        <select class="form-control" name="akses">
                            <?php foreach ($aks as $a) {
                                ?>
                                <option <?= $akses == $a ? 'selected' : '' ?> value='<?= $a ?>'><?= $a ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Password <small><i>Kosongkan Jika tidak ingin diganti</i></small></label>
                        <input class="form-control" type="password" name="password" value="" />
                    </div>
                    
                    <div>
                        <input type="hidden" name="type" value="<?=$_GET['aksi']?>" >
                        <input type="submit" name="simpan" value="Perbarui" class="btn btn-primary" style="margin-top: 25px" style="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$nama = $_POST['nama'];
$username = $_POST['username'];
$akses = $_POST['akses'];
$password = $_POST['password'];

$simpan = $_POST['simpan'];

if ($simpan) {

    if($_POST['type'] == 'edit'){
        $sql_pass = $password != '' ?  " ,password=MD5('{$password}')" : '';
        $sql = " UPDATE db_user set nama='$nama', username='$username', akses='$akses' " . $sql_pass . " where id='$id'";
        
    }else{
        $sql = " INSERT into db_user (`username`,`nama`,`password`,`akses`) values ('$username','$nama',MD5('$password'),'$akses') ";
    }
        $result = $conn->query($sql);

    if ($result) {
        ?>
        <script type="text/javascript">
            setTimeout(function() {
                alert("Data Berhasil Diperbarui.............!");
                window.location.href = "?page=user";
            }, 1000);
        </script>

    <?php
    }
}

?>