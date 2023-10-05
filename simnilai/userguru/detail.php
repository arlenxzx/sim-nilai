<?php
$sgm = $_GET['id'];
include("../simnilai/config/config.php");
$q = mysqli_fetch_array(mysqli_query($con,"SELECT id_kelas, nama_kelas, sgm.id AS id, mapel.nama FROM setting_guru_mapel AS sgm INNER JOIN kelas ON sgm.id_kelas = kelas.id INNER JOIN mapel ON sgm.id_mapel = mapel.id WHERE sgm.id = $sgm"));
$kelas = $q['id_kelas'];
$mapel = $q['id'];
?>
<body>
  <div class="row">
    <div class="col text-start">
      <div class="h4 mb-3">Daftar Nilai <?= $q['nama'] ." ". $q['nama_kelas'] ?></div>
    </div>
    <div class="col text-end">
      <a href="../simnilai/userguru/print.php?id=<?=$sgm?>&k=<?=$kelas?>&sgm=<?=$sgm?>" target="_blank" class="btn btn-info text-white mb-3"><i class="fa fa-save me-2"></i>Cetak</a>
    </div>
  </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>NO.</th>
          <th>NIS</th>
          <th>NAMA SISWA</th>
          <th>NILAI</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php 
            $no = 1;
            $query = mysqli_query($con,"SELECT nis, nama FROM siswa WHERE id_kelas = '$kelas' ORDER BY nama ASC");
            // SELECT siswa.nis, nama, nilai FROM siswa LEFT JOIN nilai ON siswa.nis = nilai.nis WHERE id_kelas = '$kelas'	AND mapel IS NULL OR mapel = '$mapel'
            while($row = mysqli_fetch_array($query)){
        ?> 
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $row['nis'] ?></td>
          <td><?php echo $row['nama'] ?></td>
          <td><?php $nis = $row['nis'];
                    $nilai = mysqli_fetch_array(mysqli_query($con, "SELECT nilai FROM nilai WHERE mapel = $sgm AND nis =$nis"));
                    if ($nilai) {
                      echo $nilai['nilai'];
                    }else {
                      echo '0';
                    }
          ?></td>
          <td class="text-center">
            <a href="guru.php?page=tns&id=<?=$row['nis']?>&m=<?=$sgm?>"><i class="fa fa-pencil-square-o btn btn-warning "></i></a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  </body>
</html>