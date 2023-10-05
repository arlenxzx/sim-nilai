<?php
include "../simnilai/config/config.php";
$result = mysqli_fetch_array(mysqli_query($con, "SELECT s.nis, s.nama AS nama, s.alamat, k.nama_kelas AS kelas, j.nama AS jurusan FROM siswa AS s INNER JOIN kelas AS k ON s.id_kelas = k.id INNER JOIN jurusan AS j ON k.id_jurusan = j.id WHERE nis = '$nis'"));
?>
    <div class="text-center">
        <span class="h5 text-center"><?php echo "Selamat Datang, " . $nama ?></span><br>
    </div>
    <div class="mt-3 bg-light p-4">
    <span class="h6 text-center">
        NIS : <?php echo $result['nis'] ?> <hr>
        Nama : <?php echo $result['nama'] ?> <hr>
        Alamat : <?php echo $result['alamat'] ?> <hr>
        Kelas : <?php echo $result['kelas'] ?> <hr>
        Jurusan : <?php echo $result['jurusan'] ?>
    </span>
    </div>