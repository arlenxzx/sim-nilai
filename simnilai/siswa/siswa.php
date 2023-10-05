<?php 
include('../simnilai/config/config.php');
$id = $_GET['id'];
$q = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM kelas WHERE id = $id"));

?>
  <body>
    <div class="row mb-3">
      <div class="col text-start">
        <a href="index.php?page=tambah_siswa&id=<?=$q['id']?>" class="btn btn-md btn-success" style="margin-bottom: 10px">+ TAMBAH DATA</a>
      </div>
      <div class="col text-end">
        <a href="index.php?page=data_siswa" class="btn btn-md btn-danger" style="margin-bottom: 10px">KEMBALI</a>
      </div>
    </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>NIS</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>KELAS</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $no = 1;
                      $query = mysqli_query($con,"SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id WHERE kelas.id = $id ORDER BY nama ASC");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nis'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      <td><?php echo $row['nama_kelas'] ?></td>
                      <td class="text-center">
                        <a href="index.php?page=edit_siswa&id=<?=$row['nis']?>" class="btn btn-sm btn-warning">EDIT</a>
                        <a href="../simnilai/siswa/hapus.php?id=<?=$row['nis']?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
  </body>
</html>