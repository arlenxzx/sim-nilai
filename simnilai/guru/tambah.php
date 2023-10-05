<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../Theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <title>Tambah Guru</title>
  </head>

  <body>

            <div class="card-header mb-3">
              TAMBAH GURU
            </div>
            <div class="card-body">
              <form action="../simnilai/guru/process.php" method="POST">
                
                <div class="form-group mb-3">
                  <label>NIP</label>
                  <input type="text" name="nip" placeholder="Masukkan NIP Guru" class="form-control">
                </div>

                <div class="form-group mb-3">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Guru" class="form-control">
                </div>

                <button type="submit" name="tambah" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=data_guru" class="btn btn-danger">KEMBALI</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>