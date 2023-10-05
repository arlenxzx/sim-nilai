<?php
include('../config/config.php');
if (isset($_POST['tambah'])) {

//get data dari form
$nis     = $_POST['nis'];
$nilai   = $_POST['nilai'];
$mapel   = $_POST['mapel'];

//query insert / update data ke dalam database
$qInsert = "INSERT INTO nilai VALUES (NULL, '$nis', '$nilai', '$mapel')";
$qUpdate = "UPDATE nilai SET nilai = '$nilai' WHERE nis = '$nis' AND mapel = '$mapel'";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
$qCheck = mysqli_query($con,"SELECT * FROM nilai WHERE nis = '$nis' AND mapel = '$mapel'");
if(mysqli_num_rows($qCheck) >= 1) {
  $result = mysqli_query($con, $qUpdate);
  } else {
  $result = mysqli_query($con, $qInsert);
  }
    if($result)
    {
      echo "<script>alert('Data berhasil diupdate!');</script>";
      echo "<script>window.location.href = '../../Theme/guru.php?page=detguru&id=$mapel';</script>"; 
    }
    else{ 
      echo "<script>alert('Data Gagal diupdate!');</script>"; 
      echo "<script>window.location.href = '../../Theme/guru.php?page=detguru&id=$mapel';</script>"; 
    }
}
?>