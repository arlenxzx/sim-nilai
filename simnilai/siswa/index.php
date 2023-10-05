<body>
    <div class="h4 text-center mb-3">DATA SISWA</div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>NO.</th>
          <th>NAMA KELAS</th>
          <th>JUMLAH MURID</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          include('../simnilai/config/config.php');
            $no = 1;
            $query = mysqli_query($con,"SELECT kelas.id,nama_kelas,COUNT(nis) AS jml FROM kelas LEFT JOIN siswa ON kelas.id = siswa.id_kelas GROUP BY kelas.id");
            while($row = mysqli_fetch_array($query)){
        ?>
        <!-- SELECT mapel.id, mapel.nama, COUNT(setting_guru_mapel.id) as jumlah FROM mapel LEFT JOIN setting_guru_mapel ON mapel.id = setting_guru_mapel.id_mapel GROUP BY mapel.nama -->
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $row['nama_kelas'] ?></td>
          <td><?php echo $row['jml'] ?></td>
          <td class="text-center">
            <a href="index.php?page=ds&id=<?=$row['id']?>" class="btn btn-sm btn-warning">DETAIL</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  </body>
</html>