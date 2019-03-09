<?php
session_start();
require 'autoload.php';
require "../page/connect/func.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$id_col=$_GET['id'];
$db=new opreter();
$sq=$db-> getDataColloge($id_col);
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'الاسم ');
$sheet->setCellValue('B1', 'االكليه');
$sheet->setCellValue('C1', 'التخصص ');
$sheet->setCellValue('D1', 'المستوى ');
$sheet->setCellValue('E1', 'الفصل الدراسي ');
$sheet->setCellValue('F1', 'الماده ');
$sheet->setCellValue('G1', 'الدرجه ');

$count=2;
foreach ($sq as $key ) {
	$sheet->setCellValue('A'.$count, $key['name']);
    $sheet->setCellValue('B'.$count, $key['name_col']);
	$sheet->setCellValue('C'.$count, $key['name']);
	$sheet->setCellValue('D'.$count, $key['datesum']);
	$sheet->setCellValue('E'.$count, $key['sub_name']);
	$sheet->setCellValue('F'.$count, $key['mak']);
	$sheet->setCellValue('G'.$count, $key['name']);
	$count++;
}

$writer = new Xlsx($spreadsheet);
// header('Content-Type: application/vnd.ms-excel');
 //header('Content-Disposition: attachment; filename="h.xlsx"');
$writer->save('h.xlsx');
  header('Content-Type: application/vnd.ms-excel');
   header('Content-Disposition: attachment; filename="export.xlsx"');
   $writer->save("php://output");
    exit;