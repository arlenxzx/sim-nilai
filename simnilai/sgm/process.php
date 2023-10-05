<?php
//include koneksi database
include('../config/config.php');

//tambah data
if (isset($_POST['tambah'])) {
    

//get data dari form
$mapel = $_POST['mapel'];
$guru   = $_POST['guru'];
$kelas   = $_POST['kelas'];

//query insert data ke dalam database
$query = "INSERT INTO setting_guru_mapel VALUES (NULL, '$mapel', '$guru','$kelas')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {
    //redirect ke halaman index.php 
    header("Location: ../../Theme/index.php?page=desgm&id=$mapel");
  } else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}}

//edit data
if (isset($_POST['edit'])) {
//get data dari form
$id = $_POST['id'];
$m = $_POST['mapel'];
$nip2 = $_POST['nip2'];
//query update data ke dalam database berdasarkan ID
$query2 = "UPDATE setting_guru_mapel SET nip = '$nip2' WHERE id = '$id'";
    
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($con->query($query2)) {
    //redirect ke halaman index.php 
    header("Location: ../../Theme/index.php?page=desgm&id=$m");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}}
  ?>