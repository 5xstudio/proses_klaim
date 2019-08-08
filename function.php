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
    } else {
        echo "<script>
            alert('Logout Berhasil!');
            location.replace('index.php?page=klaim&aksi=import');        
        </script>";
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

function insertDetail($arr = [])
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
            location.replace('index.php?page=klaim&aksi=import');        
        </script>";
    } else {
        echo "<script>
            alert('Terjadi kesalahan!');
            location.replace('index.php?page=klaim&aksi=import');        
        </script>";
    }
}

function uploadExcel()
{
    $inputFileName = $_FILES['file']['tmp_name'];
    $reader = new Xls();
    $spreadsheet = $reader->load($inputFileName);

    $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
    $data = [];
    $no = 0;

    $header = [];

    // print_r($sheetData);
    // die;
    $keys = ['no', 'ukuran_ban', 'pattern', 'li', 'si', 'tipe', 'merk', 'no_serial1', 'no_serial2', 'new', 'cl', 'kerusakan', 'keterangan', 'sku'];
    foreach ($sheetData as $key => $row) {
        if ($no == 2) {
            $temp = array_slice($row, 0, 15);
            $header['id_distributor'] = getDistributorId($row['C']);
            $header['tgl_klaim'] = date('Y-m-d', strtotime($row['L']));
        }



        if ($no == 3) {
            $header['keterangan'] = $row['C'];
            $header['grup'] = $row['L'];
            $header['no_klaim'] = createNo();
        }
        if ($no >= 8) {
            $temp = array_values(array_slice($row, 0, 16));
            unset($temp[12]);
            unset($temp[14]);
            $arr = array_values($temp);
            $newTemp = [];
            $dt = [];
            $idx = 0;
            foreach ($arr as $key => $value) {
                $newTemp[$keys[$idx]] = $value;
                $idx++;
            }
            if ($newTemp['sku'] != '') {
                $id_ban = selectBanBySku($newTemp['sku']);
                if ($id_ban != NULL) {
                    $dt['id_ban'] = $id_ban;
                    $dt['sisa_alur'] = $newTemp['cl'] != NULL ? $newTemp['cl'] : 0;
                    $dt['keterangan'] = $newTemp['keterangan'];
                    $dt['kerusakan'] = $newTemp['kerusakan'];
                    $dt['status'] = 'Pending';
                    $data[] = $dt;
                }
            }
        }
        $no++;
    }
    // print_r($data);
    $id_klaim = insertHeader($header);
    // $id_klaim = 7;
    $detail = [];
    foreach ($data as $key => $value) {
        $value['id_klaim'] = $id_klaim;
        $detail[] = $value;
    }
    insertDetail($detail);
}
