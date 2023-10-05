<?php 
  
  include('../simnilai/config/config.php');
  
  $kelas = $_GET['k'];
  $query = "SELECT * FROM kelas WHERE id = $kelas";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);
  
  $qJurusan = "SELECT * FROM jurusan";
  $rJurusan = mysqli_query($con,$qJurusan);
  
  $idJurusan = $row ['id_jurusan'];
  $qInner = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM jurusan WHERE id = $idJurusan"));
  

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../Theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <title>Edit Kelas</title>
  </head>
  <body>
            <div class="card-header mb-3">
              EDIT KELAS
            </div>
            <div class="card-body">
              <form action="../simnilai/kelas/process.php" method="POST">
                
              <input type="hidden" name="id" value="<?php echo $kelas ?>">

                <div class="form-group mb-3">
                  <label>Nama Kelas</label>
                  <input type="text" name="nama" value="<?php echo $row['nama_kelas'] ?>" placeholder="Masukkan Nama Kelas" class="form-control mb-3">
                </div>

                <div class="form-group mb-3">
                  <label>Nama Jurusan</label>
                  <select name="jurusan" class="form-select">
                    <option selected value="<?php echo $qInner['id'] ?>">-- <?php echo $qInner['nama'] ?> --</option>
                    <?php
                      while ($fJurusan = mysqli_fetch_array($rJurusan)) : ?>
                        <option value="<?php echo $fJurusan['id'] ?>"><?php echo $fJurusan['nama'] ?></option>
                        <?php endwhile; ?>
                      </select>
                    </div>

                <button type="submit" name="edit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=data_kelas" class="btn btn-danger">KEMBALI</a>

              </form>
    
  </body>
</html>
