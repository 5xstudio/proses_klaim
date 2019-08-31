<div class="panel panel-default">
    <div class="panel-heading">
        Import Data Klaim
        <!-- ?page=klaim&aksi=detail&id_klaim=9&status=Open -->
        <a href="?page=klaim&aksi=detail&id_klaim=<?=$_GET['id_klaim']?>&status=<?=$_GET['status']?>" class="btn btn-primary pull-right" style="margin-bottom: 15px"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 15px">
                <form role="form" method="POST" action="function.php?type=import_excel" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kode</label>
                        <input class="form-control" type="file" name="file" />
                    </div>
                    <input type="hidden" name="type" value="import_excel" />
                    <div>
                        <input type="submit" name="simpan" value="simpan" class="btn btn-primary" style="margin-top: 25px" style="">
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>