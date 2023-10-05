<?php 
  
  include('../simnilai/config/config.php');
  
  $id = $_GET['id'];
  $row = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM nilai WHERE id = $id"));
  $nis = $row['nis'];
  $guru = $row['mapel'];
  $result2 = mysqli_fetch_array(mysqli_query($con, "SELECT nis,nama FROM siswa WHERE nis = $nis"));
  $qR = mysqli_fetch_array(mysqli_query($con,"SELECT g.nama AS guru, m.nama AS mapel FROM setting_guru_mapel AS sgm INNER JOIN guru AS g ON sgm.nip = g.nip INNER JOIN mapel AS m ON sgm.id_mapel = m.id WHERE sgm.id = '$guru'"))
  ?>
  <div class="card-header mb-3">
    EDIT NILAI
  </div>
  <div class="card-body">
    <form action="../simnilai/nilai/process.php" method="POST">
      
      <div class="form-group mb-3">
        <label>Nama Siswa</label>
        <input type="text" value="<?php echo $result2['nis'] . " - " . $result2['nama'] ?>" readonly class="form-control">
      </div>

      <div class="form-group mb-3">
        <label>Guru Mapel</label>
        <input type="text" value="<?php echo $qR['mapel'] . " - " . $qR['guru'] ?>" readonly class="form-control">
      </div>

      <input type="hidden" name="id" value="<?=$id?>">
      <input type="hidden" name="nis" value="<?=$nis?>">

      <div class="form-group mb-3">
        <label>Nilai</label>
        <input type="number" min="0" max="100" name="nilai" value="<?php echo $row['nilai'] ?>" class="form-control">
      </div>


      <button type="submit" name="edit" class="btn btn-success">UPDATE</button>
      <button type="reset" class="btn btn-warning">RESET</button>
      <a href="index.php?page=ns&id=<?=$nis?>" class="btn btn-danger">KEMBALI</a>

    </form>

