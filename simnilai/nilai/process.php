<?php
//include koneksi database
include('../config/config.php');

//tambah data
if (isset($_POST['tambah'])) {
//get data dari form
$nis   = $_POST['nis'];
$nilai   = $_POST['nilai'];
$mapel   = $_POST['mapel'];
//query insert data ke dalam database
$query = "INSERT INTO nilai VALUES (NULL,'$nis','$nilai','$mapel')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {
    //redirect ke halaman index.php 
    header("Location: ../../Theme/index.php?page=ns&id=$nis");
  } else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}}

//edit data
if (isset($_POST['edit'])) {
//get data dari form
$nilai     = $_POST['nilai'];
$id        = $_POST['id'];
$nis       = $_POST['nis'];
//query update data ke dalam database berdasarkan ID
$query2 = "UPDATE nilai SET nilai = '$nilai' WHERE id = '$id'";
    
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($con->query($query2)) {
    //redirect ke halaman index.php 
    header("Location: ../../Theme/index.php?page=ns&id=$nis");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}}
  ?>