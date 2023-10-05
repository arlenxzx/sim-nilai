<?php
include "../simnilai/config/config.php";
$result = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM guru WHERE nip = '$nis'"));
?>
    <div class="text-center">
        <span class="h5 text-center"><?php echo "Selamat Datang, " . $nama ?></span><br>
    </div>
    <div class="mt-3 bg-light p-4">
    <span class="h6 text-center">
        NIP : <?php echo $result['nip'] ?> <hr>
        Nama : <?php echo $result['nama'] ?> <hr>
        <?php
        $query = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(id) AS jml FROM setting_guru_mapel AS sgm  WHERE nip = '$nis'"))
        ?>
        Jumlah Kelas yang diajar : <?= $query['jml'] ?><br>
       
    </span>
    </div>