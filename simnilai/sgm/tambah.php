<?php
include "../simnilai/config/config.php";
$id = $_GET['id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../Theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <title>Tambah SGM</title>
  </head>

  <body>

            <div class="card-header mb-3">
              TAMBAH GURU MAPEL
            </div>
            <div class="card-body">
              <form action="../simnilai/sgm/process.php" method="POST">

                <div class="form-group mb-3">
                  <label>Nama Mapel</label>
                  <?php
                    $optM = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM mapel WHERE id = '$id'"));
                  ?>
                  <input type="hidden" value="<?php echo $optM['id']?>" name="mapel">
                  <input type="text" class="form-control" value="<?php echo $optM['nama']?>" readonly>
                </div>

                <div class="form-group mb-3">
                  <label>Nama Guru</label>
                  <select name="guru" class="form-select">
                    <option value="">-- Pilih Guru --</option>
                    <?php
                    $optG = mysqli_query($con,"SELECT * FROM guru");
                    while ($row = mysqli_fetch_array($optG)) : ?>
                        <option value="<?php echo $row['nip'] ?>"><?php echo $row['nama'] ?></option>
                        <?php endwhile; ?>
                  </select>
                </div>
               
                <div class="form-group mb-3">
                  <label>Kelas yang Diajar:</label>
                  <select name="kelas" class="form-select">
                    <option value="">-- Pilih Kelas --</option>
                    <?php
                    $optG = mysqli_query($con,"SELECT * FROM kelas");
                    while ($row = mysqli_fetch_array($optG)) : ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['nama_kelas'] ?></option>
                        <?php endwhile; ?>
                  </select>
                </div>

                <button type="submit" name="tambah" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=desgm&id=<?=$id?>" class="btn btn-danger">KEMBALI</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>