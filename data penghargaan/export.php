<?php 
require_once "../_config/config.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>DATA PENGHARGAAN</title>
</head>
<body>
  <style type="text/css">
  body{
    font-family: sans-serif;
  }
  table{
    margin: 20px auto;
    border-collapse: collapse;
  }
  table th,
  table td{
    border: 1px solid #3c3c3c;
    padding: 3px 8px;

  }
  a{
    background: blue;
    color: #fff;
    padding: 8px 10px;
    text-decoration: none;
    border-radius: 2px;
  }
  </style>

  <?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename= Data Penghargaan.xls");
  ?>

  <center>
    <h1>DAFTAR DATA PENGHARGAAN</h1>
  </center>

  <table border="1">
    <tr>
             <th class="text-center" bgcolor="#4682B4"><font color="white">No</th>
              <th class="text-center" bgcolor="#4682B4"><font color="white">Pegawai</th>
              <th class="text-center" bgcolor="#4682B4"><font color="white">Nama Penghargaan</th>
              <th class="text-center" bgcolor="#4682B4"><font color="white">Tahun</th>
              <th class="text-center" bgcolor="#4682B4"><font color="white">Negara/Instansi</th>
                </tr>
               <?php
                  $no = 1;
                  $sql_pegawai = mysqli_query($con, "SELECT * FROM t_penghargaan
                        INNER JOIN t_pegawai001 ON t_penghargaan.id_pegawai = t_pegawai001.id_pegawai001 ") or die (mysqli_error($con));
                  while ($data = mysqli_fetch_array($sql_pegawai)) { ?>
                <tr>
                  <td><?=$no++ ?>.</td>
                 <td><?= $data['nama_pegawai001'] ?></td>
                  <td><?= $data['nama_penghargaan'] ?></td>
                  <td><?= $data['tahun'] ?></td>
                  <td><?= $data['negara'] ?></td> 
                </tr>
                <?php 
                }
                ?>

  </table>
</body>
</html>