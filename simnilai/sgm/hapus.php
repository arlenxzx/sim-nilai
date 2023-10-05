<?php
$id = $_GET['id'];
$mapel = $_GET['m'];
include "../config/config.php";
if ($con->query("DELETE FROM setting_guru_mapel WHERE id = $id")) {
    header("Location: ../../Theme/index.php?page=desgm&id=$mapel");
}
?>