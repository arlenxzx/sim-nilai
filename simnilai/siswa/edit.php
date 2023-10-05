<?php 
  
  include('../simnilai/config/config.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM siswa WHERE nis = $id";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);
  $kelas = $row['id_kelas'];

  $optKelas = mysqli_query($con, "SELECT * FROM kelas");

  $result2 = mysqli_query($con, "SELECT * FROM kelas WHERE id = $kelas");
  $row2 = mysqli_fetch_array($result2);
  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../Theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <title>Edit Siswa</title>
  </head>
  <body>
            <div class="card-header">
              EDIT SISWA
            </div>
            <div class="card-body">
              <form action="../simnilai/siswa/process.php" method="POST">
                
              <input type="hidden" name="id" value="<?php echo $id ?>">

              <div class="form-group mb-3">
                  <label>NIS</label>
                  <input type="text" name="nis" value="<?php echo $row['nis'] ?>" placeholder="Masukkan NIS Siswa" class="form-control">
                </div>

                <div class="form-group mb-3">
                  <label>Nama siswa</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama Siswa" class="form-control">
                </div>

                <div class="form-group mb-3">
                  <label>Alamat</label>
                  <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" placeholder="Masukkan Alamat" class="form-control">
                </div>

                <div class="form-group mb-3">
                  <label>Kelas</label>
                  <select name="kelas" class="form-select">
                    <option selected value="<?php echo $row2['id'] ?>">-- <?php echo $row2['nama_kelas'] ?> --</option>
                    <?php
                      while ($option = mysqli_fetch_array($optKelas)) : ?>
                        <option value="<?php echo $option['id'] ?>"><?php echo $option['nama_kelas'] ?></option>
                        <?php endwhile; ?>
                      </select>
                    </div>
        
                <button type="submit" name="edit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=data_siswa" class="btn btn-danger">KEMBALI</a>

              </form>
    
  </body>
</html>
