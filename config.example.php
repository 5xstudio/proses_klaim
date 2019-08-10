<?php

ini_set('display_errors', 1);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

session_start();
$conn = mysqli_connect("localhost", "root", "root", "db_klaim");
// $conn = mysqli_connect("localhost", "root", "", "db_klaim");

$page = $_GET['page'];
$aksi = $_GET['aksi'];


function createNo($type = 'CL', $col = 'no_klaim', $table = 'db_klaim')
{
    global $conn;
    $q = "SELECT max(`$col`) as `$col` from `$table`";
    $query = mysqli_query($conn, $q);
    $res = mysqli_fetch_assoc($query);
    $seq = substr($res[$col], 2);
    $no = intval($seq) + 1;
    $code = sprintf('%09d', $no);
    $format = $type . $code;
    return $format;
}

$ban = [];
$sql = "select * from db_ban";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    $ban[] = $row;
}

$toko = [];
$sql = "select * from db_toko";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    $toko[] = $row;
}

$distributor = [];
$sql = "select * from db_distributor";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    $distributor[] = $row;
}

$data_kerusakan = [];
$sql = "select * from db_kerusakan";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    $data_kerusakan[] = $row;
}
