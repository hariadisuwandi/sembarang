<?php
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');	
} else {
	include "../conn.php";
require('../fpdf17/fpdf.php');
require('../conn.php');


//Select the Products you want to show in your PDF file
//$result=mysql_query("SELECT * FROM daily_bbri where date like '%$periode%' ");

$result = mysqli_query($koneksi, "SELECT * FROM nilai, pelajaran, siswa WHERE nilai.kode_pelajaran = pelajaran.kode_pelajaran AND nilai.kode_siswa = siswa.kode_siswa");

//Initialize the 3 columns and the total
$column_namaPelajaran = "";
$column_nilaiTugas1 = "";
$column_nilaiTugas2 = "";
$column_nilaiTugas3 = "";
$column_nilaiUTS = "";
$column_nilaiUAS = "";
$column_totalNilai = "";
$column_nilaiRatarata = "";
$column_keterangan = "";


//For each row, add the field to the corresponding column
while($row = mysqli_fetch_array($result))
{
	$namaPelajaran = $row["nama_pelajaran"];
    $nilaiTugas1 = $row["nilai_tugas1"];
    $nilaiTugas2 = $row["nilai_tugas2"];
    $nilaiTugas3 = $row["nilai_tugas3"];
    $nilaiUTS = $row["nilai_uts"];
	$nilaiUAS = $row["nilai_uas"];

    $total = $row['nilai_tugas1'] + $row['nilai_tugas2'] + $row['nilai_tugas3'] + $row['nilai_uts'] + $row['nilai_uas'];
    $rata = $total / 5; 
    $totalNilai = $total;
    $nilaiRatarata = $rata;
    $keterangan = $row["keterangan"];

    $column_namaPelajaran = $column_namaPelajaran.$namaPelajaran."\n";
    $column_nilaiTugas1 = $column_nilaiTugas1.$nilaiTugas1."\n";
    $column_nilaiTugas2 = $column_nilaiTugas2.$nilaiTugas2."\n";
    $column_nilaiTugas3 = $column_nilaiTugas3.$nilaiTugas3."\n";
    $column_nilaiUTS = $column_nilaiUTS.$nilaiUTS."\n";
    $column_nilaiUAS = $column_nilaiUAS.$nilaiUAS."\n";
    $column_totalNilai = $column_totalNilai.$totalNilai."\n";
    $column_nilaiRatarata = $column_nilaiRatarata.$nilaiRatarata."\n";
    $column_keterangan = $column_keterangan.$keterangan."\n";

//Create a new PDF file
$pdf = new FPDF('L','mm',array(350,210)); //L For Landscape / P For Portrait
$pdf->AddPage();

$pdf->Image('../foto/logo.png',10,10,-175);
//$pdf->Image('../images/BBRI.png',190,10,-200);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(150);
$pdf->Cell(30,10,'DATA SISWA',0,0,'C');
$pdf->Ln();
$pdf->Cell(150);
$pdf->Cell(30,10,'Data Nilai Siswa (SINIWA)',0,0,'C');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(25);
$pdf->Cell(25,8,'Tugas 1',1,0,'C',1);
$pdf->SetX(50);
$pdf->Cell(40,8,'Tugas 2',1,0,'C',1);
$pdf->SetX(90);
$pdf->Cell(25,8,'Tugas 3',1,0,'C',1);
$pdf->SetX(115);
$pdf->Cell(25,8,'UTS',1,0,'C',1);
$pdf->SetX(140);
$pdf->Cell(25,8,'UAS',1,0,'C',1);
$pdf->SetX(165);
$pdf->Cell(25,8,'Rata - rata',1,0,'C',1);
$pdf->SetX(190);
$pdf->Cell(100,8,'Mata Pelajaran',1,0,'C',1);
$pdf->SetX(290);
$pdf->Cell(20,8,'Keterangan',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('arial','',12);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(25);
$pdf->MultiCell(25,6,$column_nilaiTugas1,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(50);
$pdf->MultiCell(40,6,$column_nilaiTugas2,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(90);
$pdf->MultiCell(25,6,$column_nilaiTugas3,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(115);
$pdf->MultiCell(25,6,$column_nilaiUTS,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(140);
$pdf->MultiCell(25,6,$column_nilaiUAS,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(165);
$pdf->MultiCell(25,6,$column_nilaiRatarata,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(190);
$pdf->MultiCell(100,6,$column_namaPelajaran,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(290);
$pdf->MultiCell(20,6,$column_keterangan,1,'C');
$pdf->OutputSiswa();
}
?>
