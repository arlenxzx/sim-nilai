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
            $query = mysqli_query($con,"SELECT kelas.id,nama_kelas,COUNT(nis) AS jml FROM siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id GROUP BY siswa.id_kelas");
            while($row = mysqli_fetch_array($query)){
        ?>

        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $row['nama_kelas'] ?></td>
          <td><?php echo $row['jml'] ?></td>
          <td class="text-center">
            <a href="index.php?page=den&id=<?=$row['id']?>" class="btn btn-sm btn-warning">DETAIL</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  </body>
</html>