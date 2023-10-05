<?php 
  
  include('../simnilai/config/config.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM mapel WHERE id = $id";

  $result = mysqli_query($con, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../Theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <title>Edit Mapel</title>
  </head>
  <body>
            <div class="card-header mb-3">
              EDIT MAPEL
            </div>
            <div class="card-body">
              <form action="../simnilai/mapel/process.php" method="POST">
                
              <input type="hidden" name="id" value="<?php echo $id ?>">

                <div class="form-group mb-3">
                  <label>Nama Jurusan</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama Jurusan" class="form-control mb-3">
                </div>

                <button type="submit" name="edit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=data_mapel" class="btn btn-danger">KEMBALI</a>

              </form>
    
  </body>
</html>
