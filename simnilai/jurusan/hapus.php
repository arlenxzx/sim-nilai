<?php
$id = $_GET['id'];
include "../config/config.php";
if ($con->query("DELETE FROM jurusan WHERE id = $id")) {
    header("Location: ../../Theme/index.php?page=data_jurusan");
}
?>