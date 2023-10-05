<div class="row mb-3">
  <div class="col-5">
    <a href="index.php?page=tambah_guru" class="btn btn-md btn-success" style="margin-bottom: 10px">+ TAMBAH DATA</a>
  </div>
  <div class="col">
    <div class="h4 mb-3">DATA GURU</div>
  </div>
</div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>NIP</th>
                    <th>NAMA LENGKAP</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    include('../simnilai/config/config.php');
                      $no = 1;
                      $query = mysqli_query($con,"SELECT * FROM guru ORDER BY nip ASC");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nip'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td class="text-center">
                        <a href="index.php?page=edit_guru&id=<?=$row['nip']?>" class="btn btn-sm btn-warning">EDIT</a>
                        <a href="../simnilai/guru/hapus.php?id=<?=$row['nip']?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
  </body>
</html>