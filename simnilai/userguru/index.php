<?php
include("../simnilai/config/config.php");
?>
  <body>
    <div class="h5 mb-3">DATA: <?php echo $nama . " - " . $nis;?></div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>Kelas yang Diajar</th>
                    <th>Jumlah Siswa</th>
                    <th>Mata Pelajaran</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    include('../simnilai/config/config.php');
                      $no = 1;
                      $query = mysqli_query($con, "SELECT sgm.id AS id, k.id AS kls, k.nama_kelas AS kelas, mapel.nama AS mapel FROM setting_guru_mapel AS sgm INNER JOIN kelas AS k ON sgm.id_kelas = k.id INNER JOIN mapel ON sgm.id_mapel = mapel.id WHERE nip='$nis'");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?= $no++ ?></td>
                      <td><?= @$row['kelas'] ?></td>
                      <td>
                      <?php 
                      $idKelas = $row['kls'];
                      $jml = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(nis) AS jml FROM siswa WHERE id_kelas = $idKelas"));
                      echo $jml['jml'];
                      ?>
                      </td>
                      <td><?= @$row['mapel'] ?></td>
                      <td><a href="guru.php?page=detguru&id=<?=$row['id']?>" class="btn btn-warning">DETAIL</a></td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
  </body>
</html>