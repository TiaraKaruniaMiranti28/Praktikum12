<?php
$servername = "localhost";
$username = "root";
$dbname = "form_pendaftaran";

include "koneksi2.php";

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1','No');
$sheet->setCellValue('B1','Nama');
$sheet->setCellValue('C1','Jenis Kelamin');
$sheet->setCellValue('D1','NISN');
$sheet->setCellValue('E1','NIK');
$sheet->setCellValue('F1','Tempat Lahir');
$sheet->setCellValue('G1','Tanggal Lahir');
$sheet->setCellValue('H1','Akta');
$sheet->setCellValue('I1','Agama');
$sheet->setCellValue('J1','Kewarganegaraan');
$sheet->setCellValue('K1','Berkebutuhan Khusus');
$sheet->setCellValue('L1','Alamat');
$sheet->setCellValue('M1','RT');
$sheet->setCellValue('N1','RW');
$sheet->setCellValue('O1','Dusun');
$sheet->setCellValue('P1','Desa');
$sheet->setCellValue('Q1','Kecamatan');
$sheet->setCellValue('R1','Kode Pos');
$sheet->setCellValue('S1','Lintang');
$sheet->setCellValue('T1','Bujur');
$sheet->setCellValue('U1','Tempat Tinggal');
$sheet->setCellValue('V1','Transportasi');
$sheet->setCellValue('W1','KKS');
$sheet->setCellValue('X1','Anak ke-');
$sheet->setCellValue('Y1','Penerima KPS');
$sheet->setCellValue('Z1','No KPS');

$query = mysqli_query($conn,"SELECT * FROM biodata_siswa");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query)){

	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama']);
	$sheet->setCellValue('C'.$i, $row['jk']);
	$sheet->setCellValue('D'.$i, $row['nisn']);
	$sheet->setCellValue('E'.$i, $row['nik']);
	$sheet->setCellValue('F'.$i, $row['tmplahir']);
	$sheet->setCellValue('G'.$i, $row['tgllahir']);
	$sheet->setCellValue('H'.$i, $row['akta']);
	$sheet->setCellValue('I'.$i, $row['agama']);
	$sheet->setCellValue('J'.$i, $row['kwn']);
	$sheet->setCellValue('K'.$i, $row['kebkhusus']);
	$sheet->setCellValue('L'.$i, $row['alamat']);
	$sheet->setCellValue('M'.$i, $row['rt']);
	$sheet->setCellValue('N'.$i, $row['rw']);
	$sheet->setCellValue('O'.$i, $row['dusun']);
	$sheet->setCellValue('P'.$i, $row['desa']);
	$sheet->setCellValue('Q'.$i, $row['kec']);
	$sheet->setCellValue('R'.$i, $row['pos']);
	$sheet->setCellValue('S'.$i, $row['lintang']);
	$sheet->setCellValue('T'.$i, $row['bujur']);
	$sheet->setCellValue('U'.$i, $row['tmptinggal']);
	$sheet->setCellValue('V'.$i, $row['transportasi']);
	$sheet->setCellValue('W'.$i, $row['kks']);
	$sheet->setCellValue('X'.$i, $row['anakke']);
	$sheet->setCellValue('Y'.$i, $row['penerimakps']);
	$sheet->setCellValue('Z'.$i, $row['nokps']);
	$i++;
}
	$styleArray = ['borders' => ['allBorders' => ['borderStyle' => PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],],];
	$i = $i - 1;
	$sheet->getStyle('A1:Z'.$i)->applyFromArray($styleArray);
	$writer = new Xlsx($spreadsheet);
	$writer->save('Report Data Form Pendaftaran.xlsx');
?>