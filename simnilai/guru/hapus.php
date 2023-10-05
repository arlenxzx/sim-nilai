<?php
$id = $_GET['id'];
include "../config/config.php";
if ($con->query("DELETE FROM guru WHERE nip = $id")) {
    header("Location: ../../Theme/index.php?page=data_guru");
}
?>