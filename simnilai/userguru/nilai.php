<?php 
include("../simnilai/config/config.php");
$nis = $_GET['id'];
$sgm = $_GET['m'];
$qSiswa = mysqli_fetch_array(mysqli_query($con,"SELECT nama,nama_kelas FROM siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id WHERE nis = '$nis'"));
@$qNilai = mysqli_fetch_array(mysqli_query($con,"SELECT nilai FROM nilai WHERE nis = '$nis' AND mapel = '$sgm'"));
$qSGM = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM setting_guru_mapel WHERE id = '$sgm'"));
?>
            <div class="card-header mb-3">
              TAMBAH NILAI <?= $qSiswa['nama_kelas'] . " - " . $qSiswa['nama'] ?>
            </div>
            <div class="card-body">
              <form action="../simnilai/userguru/process.php" method="POST">

                <div class="form-group mb-3">
                  <label>Nama Siswa</label>
                  <input type="hidden" name="mapel" value="<?= $sgm ?>">
                  <input type="hidden" name="nis" value="<?= $nis ?>">
                  <input type="text" class="form-control" value="<?=$qSiswa['nama']?>" readonly>
                  </select>
                </div>
  
                <div class="form-group mb-3">
                    <label>Nilai</label>
                    <input type="number" min="0" max="100" value="<?=$qNilai['nilai']?>" placeholder="Masukkan nilai (0 - 100)" class="form-control" name="nilai">
                </div>              

            <button type="submit" name="tambah" class="btn btn-success">SIMPAN</button>
            <button type="reset" class="btn btn-warning">RESET</button>
            <a href="guru.php?page=detguru&id=<?=$sgm?>" class="btn btn-danger">KEMBALI</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>