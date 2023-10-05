<?php
include('../simnilai/config/config.php');
$q1 = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(id) AS jumlah FROM mapel"));
$q2 = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(DISTINCT id_mapel) AS jumlah FROM  setting_guru_mapel"));
$q3 = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(m.nama) AS jumlah FROM mapel AS m LEFT JOIN setting_guru_mapel AS sgm ON m.id = sgm.id_mapel WHERE sgm.nip IS NULL"));
?>
<body>
    <div class="row">
      
      <div class="col">
        <div class="card text-center" style="height:100px">
          <div class="card-header bg-info text-white" style="height:35px">
            <p class="h6">Jumlah Mapel</p>
          </div>
          <div class="card-body">
           <p class="h3"><?= $q1['jumlah'] ?></p>
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="card text-center" style="height:100px">
          <div class="card-header bg-warning text-white" style="height:35px">
            <p class="h6">Mapel Tersetting</p>
          </div>
          <div class="card-body">
           <p class="h3"><?= $q2['jumlah'] ?></p>
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="card text-center" style="height:100px">
          <div class="card-header bg-danger text-white" style="height:35px">
            <p class="h6"> Mapel Belum disetting</p>
          </div>
          <div class="card-body">
           <p class="h3"><?= $q3['jumlah'] ?></p>
          </div>
        </div>
      </div>
      
</div>


              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>MAPEL</th>
                    <th>JUMLAH GURU</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $no = 1;
                      $query = mysqli_query($con, 'SELECT mapel.id, mapel.nama, COUNT(setting_guru_mapel.nip) as jumlah FROM mapel LEFT JOIN setting_guru_mapel ON mapel.id = setting_guru_mapel.id_mapel GROUP BY mapel.id');
                      while($row = mysqli_fetch_array($query)){
                        ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['jumlah'] ?></td>
                      <td class="text-center">
                        <a href="index.php?page=desgm&id=<?=$row['id']?>" class="btn btn-sm btn-warning">DETAIL</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
  </body>
</html>