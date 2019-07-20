<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'vendor/autoload.php';

// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
// use PhpOffice\PhpSpreadsheet\Reader\IReadFilter

// $spreadsheet = new Spreadsheet();
// $sheet = $spreadsheet->getActiveSheet();
// $sheet->setCellValue('A1', 'Hello World !');

// $writer = new Xlsx($spreadsheet);
// $writer->save('hello world.xlsx');
$inputFileName = './tyres.xls';
// $helper->log('Loading file ' . pathinfo($inputFileName, PATHINFO_BASENAME) . ' using IOFactory to identify the format');
// $spreadsheet = IOFactory::load($inputFileName);
// $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
// $sheetData = $spreadsheet->getActiveSheet()->toArray();
// $reader = new Xls();
// $spreadsheet = $reader->load($inputFileName);
$reader = new Xls();
$spreadsheet = $reader->load($inputFileName);

$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
$data = []; 
$no = 0;
$keys = ['no','ukuran_ban','pattern','li','si','tipe','merk','no_serial1','no_serial2','new','cl','kerusakan','keterangan'];
foreach ($sheetData as $key => $row) {
    if($no >= 9){
        $temp = array_values(array_slice($row,0,14));
        unset($temp[12]);
        $arr = array_values($temp);
        $newTemp = [];
        $idx = 0;
        foreach ($arr as $key => $value) {
            $newTemp[$keys[$idx]] = $value;
            $idx++;
        }
        $data[] = $newTemp;
    }
    $no++;
}
var_dump($data);    
