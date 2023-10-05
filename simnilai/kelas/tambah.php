<?php
include "../simnilai/config/config.php";
$q = mysqli_query($con,"SELECT * FROM jurusan");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../Theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <title>Tambah Kelas</title>
  </head>

  <body>

            <div class="card-header mb-3">
              TAMBAH KELAS
            </div>
            <div class="card-body">
              <form action="../simnilai/kelas/process.php" method="POST">

                <div class="form-group mb-3">
                  <label>Nama Kelas</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Kelas" class="form-control">
                </div>

                <div class="form-group mb-3">
                  <label>Nama Jurusan</label>
                  <select name="jurusan" class="form-select">
                    <?php
                      while ($row = mysqli_fetch_array($q)) : ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['nama'] ?></option>
                        <?php endwhile; ?>
                        <option value="" selected disabled></option>
                  </select>
                </div>

                  
                </select>

                <button type="submit" name="tambah" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=data_kelas" class="btn btn-danger">KEMBALI</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>