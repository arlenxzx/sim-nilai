<body>
  <div class="row mb-3">
    <div class="col-5">
      <a href="index.php?page=tambah_kelas" class="btn btn-md btn-success" style="margin-bottom: 10px">+ TAMBAH DATA</a>
    </div>
    <div class="col">
      <div class="h4 mb-3">DATA KELAS</div>
    </div>
  </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>NAMA KELAS</th>
                    <th>JURUSAN</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    include('../simnilai/config/config.php');
                      $no = 1;
                      $query = mysqli_query($con,"SELECT kelas.id as id, kelas.nama_kelas as a, jurusan.nama as b FROM kelas INNER JOIN jurusan ON jurusan.id = kelas.id_jurusan ORDER BY a ASC");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['a'] ?></td>
                      <td><?php echo $row['b'] ?></td>
                      <td class="text-center">
                        <a href="index.php?page=edit_kelas&k=<?=$row['id']?>" class="btn btn-sm btn-warning">EDIT</a>
                        <a href="../simnilai/kelas/hapus.php?id=<?=$row['id']?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
  </body>
</html>