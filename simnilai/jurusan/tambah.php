<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../Theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <title>Tambah Jurusan</title>
  </head>

  <body>

            <div class="card-header mb-3">
              TAMBAH JURUSAN
            </div>
            <div class="card-body">
              <form action="../simnilai/jurusan/process.php" method="POST">

                <div class="form-group mb-3">
                  <label>Nama Jurusan</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Jurusan" class="form-control">
                </div>

                <button type="submit" name="tambah" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=data_jurusan" class="btn btn-danger">KEMBALI</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>