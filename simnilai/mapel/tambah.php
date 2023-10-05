<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../Theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <title>Tambah Mapel</title>
  </head>

  <body>

            <div class="card-header mb-3">
              TAMBAH MAPEL
            </div>
            <div class="card-body">
              <form action="../simnilai/mapel/process.php" method="POST">

                <div class="form-group mb-3">
                  <label>Nama Mapel</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Mapel" class="form-control">
                </div>

                <button type="submit" name="tambah" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=data_mapel" class="btn btn-danger">KEMBALI</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>