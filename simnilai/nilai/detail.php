<?php
include('../simnilai/config/config.php');
$id = $_GET['id'];
$head = mysqli_fetch_array(mysqli_query($con,"SELECT nama_kelas, COUNT(nis) AS jml FROM siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id WHERE id_kelas = '$id'"));
// $head2 = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(sgm.id_mapel) AS jml FROM setting_guru_mapel AS sgm WHERE id_mapel = '$id'"));
?>
<body>
    <div class="row mb-3 ms-1">
        <div class="col-3 h6 bg-success text-white text-center p-3">
            Kelas: <?php echo $head['nama_kelas'] ?>
        </div>
        <div class="col-3 h6 bg-info text-white text-center p-3">
            Jumlah Siswa: <?php echo $head['jml'] ?>
        </div>
        <div class="col-2 offset-4 text-center align-self-center">
        <a href="index.php?page=dn" class="btn btn-danger">KEMBALI</a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NO.</th>
                <th>NIS</th>
                <th>NAMA SISWA</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                $query = mysqli_query($con, "SELECT * FROM siswa WHERE id_kelas = '$id' ORDER BY nama ASC");
                while($row = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nis'] ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td class="text-center">
                <a href="index.php?page=ns&id=<?=$row['nis']?>"class="text-dark p-2"><i class="fa fa-search"></i><span> Lihat</span></a>
                </td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
</body>