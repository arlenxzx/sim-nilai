<?php
require('../../pdf/fpdf.php');
require('../config/config.php');
$id = $_GET['id'];
$kls = $_GET['k'];
$sgm = $_GET['sgm'];
$q = mysqli_fetch_array(mysqli_query($con,"SELECT mapel.nama AS mapel, guru.nama FROM setting_guru_mapel AS sgm INNER JOIN guru ON sgm.nip = guru.nip INNER JOIN mapel On sgm.id_mapel = mapel.id WHERE sgm.id = '$sgm'"));
$query = mysqli_query($con,"SELECT * FROM siswa WHERE id_kelas = '$kls' ORDER BY nama ASC");
$kelas = mysqli_fetch_array(mysqli_query($con,"SELECT nama_kelas FROM kelas WHERE id = '$kls'"));
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,20,'Daftar Nilai ' . $q['mapel'] . ' ' . $kelas['nama_kelas'],0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,7,'Guru Pengampu: ' . $q['nama'],0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(40,7,'NIS',1,0,'C');
$pdf->Cell(100,7,'NAMA SISWA',1,0,'C');
$pdf->Cell(40,7,'NILAI',1,1,'C');
while($row = mysqli_fetch_array($query)){
    $pdf->Cell(40,7,"".$row['nis'],1,0,'C');
    $pdf->Cell(100,7,$row['nama'],1,0);
    $nis = $row['nis'];
    $nilai_query = mysqli_query($con, "SELECT nilai FROM nilai WHERE mapel = $id AND nis = $nis");
    if (mysqli_num_rows($nilai_query) > 0) {
        $nilai = mysqli_fetch_array($nilai_query);
        $pdf->Cell(40,7,$nilai['nilai'],1,1,'C');
    } else {
        $pdf->Cell(40,7,'0',1,1,'C');
    }
}

$pdf->Output();
?>