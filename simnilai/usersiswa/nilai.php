  <body>
    <span class="h5">DAFTAR NILAI <?php echo $nama . " - " . $nis;?></span>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>MAPEL</th>
                    <th>NILAI</th>
                    <th>GURU PENGAMPU</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    include('../simnilai/config/config.php');
                      $no = 1;
                      $query = mysqli_query($con,"SELECT m.nama AS mapel, n.nilai, g.nama FROM nilai AS n INNER JOIN setting_guru_mapel AS sgm ON n.mapel = sgm.id INNER JOIN guru AS g ON sgm.nip = g.nip INNER JOIN mapel AS m ON sgm.id_mapel = m.id WHERE nis = '$nis'");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['mapel'] ?></td>
                      <td><?php echo $row['nilai'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
  </body>
</html>