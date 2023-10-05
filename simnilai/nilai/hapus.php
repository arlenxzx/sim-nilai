<?php
$id = $_GET['id'];
$nis = $_GET['nis'];
include "../config/config.php";
if ($con->query("DELETE FROM nilai WHERE id = $id")) {
    header("Location: ../../Theme/index.php?page=ns&id=$nis");
}
?>