<?php
$nis = $_GET['id'];
include("../simnilai/config/config.php");
$siswa = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM siswa WHERE nis ='$nis'"));
?>
<body>
    <div class="row mb-3">
        <div class="col-6">
            <span class="h4">DAFTAR NILAI <?php echo $siswa['nama'] . " - " . $siswa['nis']?></span>
        </div>
        <div class="col-6 text-end">
            <span class="h4"><a href="index.php?page=tn&s=<?=$siswa['nis']?>" class="btn btn-success">+ TAMBAH NILAI</a></span>
            <span class="h4"><a href="index.php?page=den&id=<?=$siswa['id_kelas']?>" class="btn btn-danger">KEMBALI</a></span>
        </div>
        </div>
    </div>
        <table class="table text-center table-bordered">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>MAPEL</th>
                    <th>NILAI</th>
                    <th>GURU PENGAMPU</th>
                    <th>AKSI</th>
                  </tr>
            </thead>
            <tbody>
              <?php 
                    $no = 1;
                    $query = mysqli_query($con,"SELECT n.id AS id, m.nama AS mapel, n.nilai, g.nama FROM nilai AS n INNER JOIN setting_guru_mapel AS sgm ON n.mapel = sgm.id INNER JOIN guru AS g ON sgm.nip = g.nip INNER JOIN mapel AS m ON sgm.id_mapel = m.id WHERE nis = '$nis'");
                    while($row = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['mapel'] ?></td>
                    <td><?php echo $row['nilai'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td>
                        <a href="index.php?page=en&id=<?=$row['id']?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="../simnilai/nilai/hapus.php?id=<?=$row['id']?>&nis=<?=$nis?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</body>