<?php
session_start();
@$nama = $_POST['nama'];
@$ni  = $_POST['nis'];
@$lv  = $_POST['lv'];

include("../simnilai/config/config.php");

switch ($lv) {
    case 'guru':
        $q = mysqli_query($con, "SELECT * FROM guru WHERE nip = '$ni' AND nama = '$nama'");
        break;

    case 'siswa':
        $q = mysqli_query($con, "SELECT * FROM siswa WHERE nis = '$ni' AND nama = '$nama'");
        break;

    case 'admin':
        if ($nama == 'admin' && $ni == '123') {
            header("Location: ../Theme/index.php");
        }else{ echo "<script>alert('Data tidak ditemukan!'); window.location.href='index.php';</script>";}
        break;

}


if (mysqli_num_rows($q) == 1) {
    $_SESSION['level'] = $lv;
    $_SESSION['ni'] = $ni;
    $_SESSION['nama'] = $nama;
    $sesi = $_SESSION['level'];
    switch ($sesi) {
        case 'guru':
            header("Location: ../Theme/guru.php");
            break;
        
        case 'siswa':
            header("Location: ../Theme/siswa.php");
            break;
        
    }
}else{
    echo "<script>alert('Data tidak ditemukan!'); window.location.href='index.php';</script>";
    var_dump($_POST);
}
?>