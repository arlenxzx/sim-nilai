<?php
//include koneksi database
include('../config/config.php');

//tambah data
if (isset($_POST['tambah'])) {
    

//get data dari form
$nip    = $_POST['nip'];
$nama   = $_POST['nama'];

//query insert data ke dalam database
$query = "INSERT INTO guru VALUES ('$nip','$nama')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {
    //redirect ke halaman index.php 
    header("Location: ../../Theme/index.php?page=data_guru");
  } else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}}

//edit data
if (isset($_POST['edit'])) {
//get data dari form
$nama     = $_POST['nama'];
$nip    = $_POST['nip'];
$id = $_POST['id'];
//query update data ke dalam database berdasarkan ID
$query2 = "UPDATE guru SET nip = '$nip', nama = '$nama' WHERE nip = '$id'";
    
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($con->query($query2)) {
    //redirect ke halaman index.php 
    header("Location: ../../Theme/index.php?page=data_guru");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}}
  ?>