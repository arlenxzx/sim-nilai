<?php
//include koneksi database
include('../config/config.php');

//tambah data
if (isset($_POST['tambah'])) {
    

//get data dari form
$nis = $_POST['nis'];
$nama   = $_POST['nama'];
$alamat   = $_POST['alamat'];
$jurusan   = $_POST['jurusan'];

//query insert data ke dalam database
$query = "INSERT INTO siswa VALUES ('$nis', '$nama', '$alamat', '$jurusan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {
    //redirect ke halaman index.php 
    header("Location: ../../Theme/index.php?page=data_siswa");
  } else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}}

//edit data
if (isset($_POST['edit'])) {
//get data dari form
$id = $_POST['id'];
$nis = $_POST['nis'];
$nama   = $_POST['nama'];
$alamat   = $_POST['alamat'];
$kelas   = $_POST['kelas'];
//query update data ke dalam database berdasarkan ID
$query2 = "UPDATE siswa SET nis = '$nis', nama = '$nama', alamat = '$alamat', id_kelas = '$kelas' WHERE nis = '$id'";
    
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($con->query($query2)) {
    //redirect ke halaman index.php 
    header("Location: ../../Theme/index.php?page=data_siswa");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}}
  ?>