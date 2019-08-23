<?php
require_once 'config.php';
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xls;

//  switch req get
if (isset($_GET['type'])) {
    switch ($_GET['type']) {
        case 'logout':
            logout();
            break;
        case 'show_detail':
            showKlaimDetail();
            break;
        case 'export_summary':
            exportSummary();
            break;
        case 'get_data_ban':
            getDataBan();
            break;
        case 'get_data_kerusakan':
            getDataKerusakan();
            break;
        case 'download_template':
            downloadTemplate();
            break;
        case 'export_result':
            exportResult();
            break;
    }
}

//  switch req post
if (isset($_POST['type'])) {
    switch ($_POST['type']) {
        case 'login':
            login();
            break;
        case 'process_done':
            processDone();
            break;
        case 'save_detail_status':
            saveDetailStatus();
            break;
        case 'import_excel':
            uploadExcel();
            break;
        case 'delete':
            delete();
            break;
    }
}

function login()
{
    global $conn;
    $post = $_POST;
    $p = md5($post['p']);
    $sql = "SELECT * from db_user where username = '{$post['u']}' AND `password`= '{$p}' ";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['akses'] = $data['akses'];
        echo json_encode(['success' => 1, 'message' => 'login berhasil', 'data' => []]);
    } else {
        echo json_encode(['success' => 1, 'message' => 'Username Atau Password salah', 'data' => []]);
    }
}

function logout()
{
    session_destroy();
    echo "<script>
        alert('Logout Berhasil!');
        location.replace('index.php');        
    </script>";
}

function delete()
{
    global $conn;
    $status = 1;
    $msg = "Hapus data berhasil!";
    $post = $_POST;
    $sql = "DELETE FROM " . $post['table'] . " where " . $post['key'] . " = '" . $post['value'] . "' ";
    $q = mysqli_query($conn, $sql);
    $result = mysqli_num_rows($q);
    if ($post['table'] == 'db_klaim') {
        $sql = "DELETE FROM " . $post['table'] . "_detail where " . $post['key'] . " = '" . $post['value'] . "' ";
        $q = mysqli_query($conn, $sql);
    }
    echo json_encode(['status' => $status, 'message' => $msg]);
}


function getDataBan()
{
    global $conn;
    $sql = "SELECT * FROM db_ban where id = '{$_GET['id_ban']}'";
    $q = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($q);
    echo json_encode(['data' => $row]);
}

function getDataKerusakan()
{
    global $conn;
    $sql = "SELECT * FROM db_kerusakan where id_kerusakan = '{$_GET['id_kerusakan']}'";
    $q = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($q);
    echo json_encode(['data' => $row]);
}

function processDone()
{
    global $conn;
    $status = 0;
    $msg = 'Ubah data Berhasil';
    $post = $_POST;
    $sql = "SELECT * FROM db_klaim_detail where status='Pending' and id_klaim ='" . $post['id_klaim'] . "' ";
    $q = mysqli_query($conn, $sql);
    $result = mysqli_num_rows($q);
    if ($result > 0) {
        $msg = "Klaim belum diproses semua!";
    } else {
        $sqlup = "UPDATE db_klaim set status = 'Done',tgl_selesai = CURRENT_TIMESTAMP() where id_klaim='" . $post['id_klaim'] . "'";
        $qr = mysqli_query($conn, $sqlup);
        $status = 1;
    }
    echo json_encode(['status' => $status, 'message' => $msg]);
}

function showKlaimDetail()
{
    global $conn;
    $status = 1;
    $get = $_GET;
    $sql = "select d.*,h.no_klaim from db_klaim_detail d join db_klaim h on d.id_klaim = h.id_klaim where d.id_klaim_detail = '" . $get['id_klaim_detail'] . "' ";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    echo json_encode(['status' => $status, 'data' => $row]);
}

function saveDetailStatus()
{
    global $conn;
    $status = 1;
    $msg = 'Proses data Berhasil';
    $post = $_POST;
    $sql = "UPDATE db_klaim_detail set status = '" . $post['status'] . "' where id_klaim_detail='" . $post['id_klaim_detail'] . "'";
    $q = mysqli_query($conn, $sql);
    echo json_encode(['status' => $status, 'message' => $msg]);
}

function getDistributorId($kode)
{
    global $conn;
    $sql = "SELECT id_distributor FROM db_distributor where kode_distributor ='$kode' ";
    $q = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($q);
    if ($row != NULL) {
        return $row['id_distributor'];
    }
}

function selectBanBySku($sku)
{
    global $conn;
    $sql = "SELECT id FROM db_ban where kode ='$sku' ";
    $q = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($q);
    if ($row != NULL) {
        return $row['id'];
    } else {
        return NULL;
    }
}

function insertHeader($arr = [])
{
    global $conn;
    $column = implode(',', array_keys($arr));
    $values = implode("','", array_values($arr));
    $sql = "INSERT into db_klaim ($column) values ('$values') ";
    $q = mysqli_query($conn, $sql);
    return $conn->insert_id;
}

function insertDetail($arr = [], $header = [])
{
    global $conn;
    $column = implode('`,`', array_keys($arr[0]));
    $values = '';
    foreach ($arr as $key => $value) {
        $values .= "('" . implode("','", array_values($value)) . "'),";
    }
    $values = substr($values, 0, (strlen($values) - 1));
    $sql = "INSERT into db_klaim_detail (`$column`) values $values ";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo "<script>
            alert('Data berhasil diimport!');
            location.replace('index.php?page=klaim&aksi=detail&id_klaim={$header['id_klaim']}&status=Open');        
        </script>";
    } else {
        echo "<script>
            alert('Terjadi kesalahan!');
            location.replace('index.php?page=klaim&aksi=detail&id_klaim={$header['id_klaim']}&status=Open');        
        </script>";
    }
}

function downloadTemplate()
{
    global $conn;
    $sql = "SELECT h.*,d.kode_distributor FROM db_klaim h join db_distributor d on h.id_distributor = d.id_distributor where h.id_klaim = '{$_GET['id_klaim']}'";
    $q = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($q);

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="template_klaim.xls"');
    header('Cache-Control: max-age=0');

    ?>
    <table>
        <tr>
            <td>Kode Distributor</td>
            <td><?= $row['kode_distributor'] ?></td>
        </tr>
        <tr>
            <td>No Klaim</td>
            <td><?= $row['no_klaim'] ?></td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Kode Toko</td>
            <td>Kode SKU</td>
            <td>Kode Kerusakan</td>
            <td>Sisa Alur</td>
            <td>Keterangan</td>
        </tr>
    </table>
<?php

}

function uploadExcel()
{
    $inputFileName = $_FILES['file']['tmp_name'];
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);

    $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
    $data = [];
    $no = 0;

    $header = [];

    $keys = ['no', 'ukuran_ban', 'pattern', 'li', 'si', 'tipe', 'merk', 'no_serial1', 'no_serial2', 'new', 'cl', 'kerusakan', 'keterangan', 'sku'];
    foreach ($sheetData as $key => $row) {

        if ($no == 0) {
            $header['id_distributor'] = getDistributorId($row['B']);
        }

        if ($no == 1) {
            $header['id_klaim'] = getIdByCode('db_klaim', 'no_klaim', 'id_klaim', $row['B']);
        }


        if ($no >= 4) {

            $dt['id_klaim'] = $header['id_klaim'];
            $dt['id_toko'] = getIdByCode('db_toko', 'kode_toko', 'id_toko', $row['B']);
            $dt['id_ban'] = getIdByCode('db_ban', 'kode', 'id', $row['C']);
            $dt['id_kerusakan'] = getIdByCode('db_kerusakan', 'kode_kerusakan', 'id_kerusakan', $row['D']);
            $dt['sisa_alur'] = $row['E'];
            $dt['keterangan'] = $row['F'];
            $data[] = $dt;
        }
        $no++;
    }

    $detail = [];
    foreach ($data as $key => $value) {
        $value['id_klaim'] = $dt['id_klaim'];
        $detail[] = $value;
    }
    // var_dump($detail);
    insertDetail($detail, $header);
}

function getIdByCode($table, $kode_kolom, $id_kolom, $value)
{
    global $conn;
    $sql = "SELECT $id_kolom FROM {$table} where {$kode_kolom} ='$value' ";
    $q = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($q);
    if ($row != NULL) {
        return $row[$id_kolom];
    } else {
        return NULL;
    }
}

function exportResult()
{
    global $conn;
    $sqlh = " SELECT k.*,d.nama_distributor,d.alamat FROM db_klaim k
    JOIN db_distributor d on k.id_distributor = d.id_distributor
    WHERE k.id_klaim='{$_GET['id_klaim']}'";
    $query = mysqli_query($conn, $sqlh);
    $header = mysqli_fetch_assoc($query);

    $klaim = [];
    $sql = " SELECT d.*,h.no_klaim,b.kode,b.ukuran,b.grup,b.alur_ban,b.pattern,b.li,b.si,b.type,b.brand,k.kode_kerusakan,k.nama_kerusakan,k.sebab,k.disposisi,t.kode_toko,t.nama_toko,h.status 
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
    $b = 'border:1px solid black;';
    $c = 'text-align:center;';
    $l = 'text-align:left;';
    $r = 'text-align:right;';

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="summary_klaim.xls"');
    header('Cache-Control: max-age=0');
    ?>
    <table border="0" cellspacing="0" cellpadding="4">
        <tr>
            <td colspan="12" style="text-align:center;">TYRE CLAIM SHEET</td>
            <td rowspan="3" style="<?= $b ?>"></td>
            <td rowspan="3" style="<?= $b ?>"></td>
            <td rowspan="3" style="<?= $b ?>"></td>
        </tr>
        <tr>
            <td colspan="2">Distributor</td>
            <td colspan="5">: <?=$header['nama_distributor']?></td>
            <td colspan="4">Date of Claim / Tanggal</td>
            <td>: <?=date('d F Y', strtotime($header['tgl_klaim']))?></td>
        </tr>
        <tr>
            <td colspan="2">Address / Alamat</td>
            <td colspan="5">: <?=$header['alamat']?></td>
            <td colspan="4">Page</td>
            <td>: 1</td>
        </tr>
        <tr>
            <td colspan="12"></td>
            <td style="<?= $b ?>">Dibuat:</td>
            <td style="<?= $b ?>">Diperiksa</td>
            <td style="<?= $b ?>">Disetujui</td>
        </tr>
        <tr>
            <td style="<?= $b.$c ?>">1. No</td>
            <td style="<?= $b.$c ?>">2. Ukuran Ban</td>
            <td style="<?= $b.$c ?>">3.Patern</td>
            <td style="<?= $b.$c ?>">4. LI</td>
            <td style="<?= $b.$c ?>">5. SI</td>
            <td style="<?= $b.$c ?>">6. Tipe</td>
            <td style="<?= $b.$c ?>">7. Merk</td>
            <td colspan="2" style="<?= $b.$c ?>">8. No Serial</td>
            <td colspan="2" style="<?= $b.$c ?>">9. Sisa Alur (mm) </td>
            <td style="<?= $b.$c ?>">10. Kerusakan</td>
            <td colspan="3" style="<?= $b.$c ?>">11. Keterangan</td>
        </tr>
        <?php
        foreach ($klaim as $key => $value) : ?>
            <tr>
                <td style="<?= $b.$c ?>"><?= $value['no'] ?></td>
                <td style="<?= $b ?>"><?= $value['ukuran'] ?></td>
                <td style="<?= $b ?>"><?= $value['pattern'] ?></td>
                <td style="<?= $b ?>"><?= '' ?></td>
                <td style="<?= $b ?>"><?= '' ?></td>
                <td style="<?= $b ?>"><?= $value['type'] ?></td>
                <td style="<?= $b ?>"><?= $value['brand'] ?></td>
                <td style="<?= $b ?>"><?= $value['serial_l'] ?></td>
                <td style="<?= $b ?>"><?= $value['serial_r'] ?></td>
                <td style="<?= $b.$c ?>"><?= $value['sisa_alur'] == $value['alur_ban'] ? '&#10004;' : '' ?></td>
                <td style="<?= $b.$r ?>"><?= $value['sisa_alur'] == $value['alur_ban'] ? '' : $value['sisa_alur'] ?></td>
                <td style="<?= $b ?>"><?= $value['nama_kerusakan'] ?></td>
                <td colspan="3" style="<?= $b ?>"><?= $value['keterangan'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
<?php

}

function exportSummary()
{
    global $conn;
    $klaim = [];
    $sql = " SELECT d.*,b.*,h.no_klaim,h.status,h.tgl_klaim,dis.nama_distributor,t.* FROM db_klaim_detail d
    JOIN db_klaim h ON d.id_klaim = h.id_klaim
    JOIN db_distributor dis ON h.id_distributor = dis.id_distributor
    JOIN db_ban b ON d.id_ban = b.id
    JOIN db_toko t ON d.id_toko = t.id_toko where h.tgl_klaim >= '{$_GET['s']}' and h.tgl_klaim <= '{$_GET['e']}' ";
    $query = mysqli_query($conn, $sql);
    $no = 1;
    while ($row = mysqli_fetch_assoc($query)) {
        $row['no'] = $no;
        $klaim[] = $row;
        $no++;
    }

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="summary_klaim.xls"');
    header('Cache-Control: max-age=0');

    ?>
    <h2>Summary Klaim</h2>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">No Klaim</th>
                <th rowspan="2">Tgl Klaim</th>
                <th rowspan="2">Distributor</th>
                <th rowspan="2">Tipe</th>
                <th rowspan="2">Toko</th>
                <th rowspan="2">Status</th>
                <th colspan="5">Tyre Profile</th>
            </tr>
            <tr>
                <th>Kode</th>
                <th>Tyre</th>
                <th>Brand</th>
                <th>Pattern</th>
                <th>Serial</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($klaim as $key => $v) : ?>
                <tr>
                    <td><?= $v['no'] ?></td>
                    <td><?= $v['no_klaim'] ?></td>
                    <td><?= $v['tgl_klaim'] ?></td>
                    <td><?= $v['nama_distributor'] ?></td>
                    <td><?= $v['grup'] ?></td>
                    <td class=""><?= $v['nama_toko'] ?></td>
                    <td class=""><?= $v['status'] ?></td>
                    <td class=""><?= $v['kode'] ?></td>
                    <td class=""><?= $v['ukuran'] ?></td>
                    <td class=""><?= $v['brand'] ?></td>
                    <td class=""><?= $v['pattern'] ?></td>
                    <td class=""><?= $v['li'] . ' - ' . $v['si'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php
}
