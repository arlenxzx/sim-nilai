<?php
include('../simnilai/config/config.php');
$id = $_GET['id'];
$head = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM mapel WHERE id = '$id'"));
$head2 = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(sgm.id_mapel) AS jml FROM setting_guru_mapel AS sgm WHERE id_mapel = '$id'"));
?>
<body>
    <div class="row mb-3">
        <div class="col-2 text-start align-self-center">
        <a href="index.php?page=tsgm&id=<?=$id?>" class="btn btn-success">+ TAMBAH</a>
        </div>
        <div class="col-3 offset-1 h6 bg-info text-white text-center p-3">
            Mapel: <?php echo $head['nama'] ?>
        </div>
        <div class="col-3 h6 bg-secondary text-white text-center p-3">
            Jumlah Guru: <?php echo $head2['jml'] ?>
        </div>
        <div class="col-2 offset-1 text-end align-self-center">
        <a href="index.php?page=dsgm" class="btn btn-danger">KEMBALI</a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NO.</th>
                <th>NAMA GURU</th>
                <th>NIP</th>
                <th>KELAS</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                $query = mysqli_query($con, "SELECT sgm.id AS id, g.nama AS nama, sgm.nip AS nip, k.nama_kelas AS kelas FROM setting_guru_mapel AS sgm INNER JOIN guru AS g ON sgm.nip = g.nip INNER JOIN kelas AS k ON sgm.id_kelas = k.id WHERE id_mapel = '$id'");
                while($row = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$row['nama']?></td>
                <td><?=$row['nip']?></td>
                <td><?=$row['kelas']?></td>
                <td class="text-center">
                <a href="index.php?page=esgm&id=<?=$row['id']?>" class="btn btn-sm btn-warning">EDIT</a>
                <a href="../simnilai/sgm/hapus.php?id=<?=$row['id']?>&m=<?=$head['id']?>" class="btn btn-sm btn-danger">HAPUS</a>
                </td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
</body>