<?php
//include koneksi database
include('../config/config.php');

//tambah data
if (isset($_POST['tambah'])) {
    

//get data dari form
$nama    = $_POST['nama'];
$jurusan = $_POST['jurusan'];
//query insert data ke dalam database
$query = "INSERT INTO kelas VALUES (NULL,'$nama','$jurusan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {
    //redirect ke halaman index.php 
    header("Location: ../../Theme/index.php?page=data_kelas");
  } else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}}

//edit data
if (isset($_POST['edit'])) {
//get data dari form
$nama     = $_POST['nama'];
$jurusan  = $_POST['jurusan']; 
$id       = $_POST['id'];
//query update data ke dalam database berdasarkan ID
$query2 = "UPDATE kelas SET nama_kelas = '$nama', id_jurusan = '$jurusan' WHERE id = '$id'";
    
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($con->query($query2)) {
    //redirect ke halaman index.php 
    header("Location: ../../Theme/index.php?page=data_kelas");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}}
  ?>