<?php
include "../simnilai/config/config.php";
$nis = $_GET['s'];
$qS = mysqli_fetch_array(mysqli_query($con,"SELECT nama, id_kelas FROM siswa WHERE nis = '$nis'"));
$kls = $qS['id_kelas'];
@$qM = mysqli_query($con,"SELECT sgm.id, g.nama AS guru, m.nama AS mapel FROM setting_guru_mapel AS sgm INNER JOIN guru AS g ON sgm.nip = g.nip INNER JOIN mapel AS m ON sgm.id_mapel = m.id WHERE sgm.id_kelas ='$kls'");
?>
            <div class="card-header mb-3">
              TAMBAH NILAI
            </div>
            <div class="card-body">
              <form action="../simnilai/nilai/process.php" method="POST">

                <div class="form-group mb-3">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control" value="<?= $nis . " - " . $qS['nama']?>">
                  <input type="hidden" value="<?=$nis?>" name="nis">
                </div>
                
                <div class="form-group mb-3">
                  <label>Mata Pelajaran</label>
                  <select name="mapel" class="form-select">
                    <option value="">-- Pilih Mapel --</option>
                    <?php
                      while ($opM = mysqli_fetch_array($qM)) : ?>
                        <option value="<?php echo $opM['id'] ?>"><?php echo $opM['mapel']. " - " . $opM['guru'] ?></option>
                    <?php endwhile; ?>
                  </select>
                </div>                  

                <div class="form-group mb-3">
                  <label>Nilai</label>
                  <input type="number" min="0" max="100" placeholder="Masukkan nilai (0 - 100)" class="form-control" name="nilai">
                </div>


            <button type="submit" name="tambah" class="btn btn-success">SIMPAN</button>
            <button type="reset" class="btn btn-warning">RESET</button>
            <a href="index.php?page=ns&id=<?=$nis?>" class="btn btn-danger">KEMBALI</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>