<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../Theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <title>Tambah Siswa</title>
  </head>

  <body>

            <div class="card-header mb-3">
              TAMBAH SISWA
            </div>
            <div class="card-body">
              <form action="../simnilai/siswa/process.php" method="POST">

                <div class="form-group mb-3">
                  <label>NIS</label>
                  <input type="text" name="nis" placeholder="Masukkan NIS Siswa" class="form-control">
                </div>

                <div class="form-group mb-3">
                  <label>Nama siswa</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Siswa" class="form-control">
                </div>

                <div class="form-group mb-3">
                  <label>Alamat</label>
                  <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control">
                </div>

                <div class="form-group mb-3">
                  <label>Kelas</label>
                    <?php
                    include "../simnilai/config/config.php";
                    $id = $_GET['id'];
                    $q = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM kelas WHERE id = $id"));
                    ?>
                    <input type="hidden" value="<?=$q['id'] ?>" name="jurusan" readonly>
                    <input type="text" class="form-control mb-3" value="<?=$q['nama_kelas'] ?>" class="kelas" readonly>

                <button type="submit" name="tambah" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=data_siswa" class="btn btn-danger">KEMBALI</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>