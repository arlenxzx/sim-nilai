<?php 
  
  include('../simnilai/config/config.php');
  
  $id  = $_GET[ 'id'];
  
  $qSgm = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM setting_guru_mapel WHERE id ='$id'"));
  $nip = $qSgm['nip'];
  $mapel = $qSgm['id_mapel'];
  $qM = mysqli_fetch_array(mysqli_query($con, "SELECT nama FROM mapel WHERE id = '$mapel'"));
  $qG = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM guru WHERE nip = '$nip'"));
  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../Theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <title>Edit SGM</title>
  </head>
  <body>
            <div class="card-header mb-3">
              EDIT GURU MAPEL
            </div>
            <div class="card-body">
              <form action="../simnilai/sgm/process.php" method="POST">
                
              <input type="hidden" name="id" value="<?php echo $id ?>">
              <input type="hidden" name="mapel" value="<?php echo $mapel ?>">

                <div class="form-group mb-3">
                  <label>Guru</label>
                  <select name="nip2" class="form-select">
                    <option selected value="<?php echo $qG['nip'] ?>">-- <?php echo $qG['nama'] ?> --</option>
                    <?php
                    $optG = mysqli_query($con,"SELECT * FROM guru");
                      while ($option = mysqli_fetch_array($optG)) : ?>
                        <option value="<?php echo $option['nip'] ?>"><?php echo $option['nama'] ?></option>
                        <?php endwhile; ?>
                      </select>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control mb-3" value="<?php echo $qM['nama'] ?>" readonly>
                </div>
        
                <button type="submit" name="edit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=desgm&id=<?=$mapel?>" class="btn btn-danger">KEMBALI</a>

              </form>
    
  </body>
</html>
