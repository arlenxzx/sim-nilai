<?php
$id = $_GET['id'];
include "../config/config.php";
if ($con->query("DELETE FROM siswa WHERE nis = $id")) {
    header("Location: ../../Theme/index.php?page=data_siswa");
}
?>