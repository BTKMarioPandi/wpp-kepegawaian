<?php 
require_once "../_config/config.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>DATA PEGAWAI 20</title>
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
  header("Content-Disposition: attachment; filename=Data Pegawai.xls");
  ?>

  <center>
    <h1>DAFTAR DATA PEGAWAI </h1>
  </center>

  <table border="1">
    <tr>
            <th class="text-center" bgcolor="#fe3636"><font color="white">No</th>
            <th class="text-center" bgcolor="#fe3636"><font color="white">Nik</th>
            <th class="text-center" bgcolor="#fe3636"><font color="white">Nama Pegawai</th>
            <th class="text-center" bgcolor="#fe3636"><font color="white">Tempat Lahir</th>
            <th class="text-center" bgcolor="#fe3636"><font color="white">Tgl Lahir</th>
            <th class="text-center" bgcolor="#fe3636"><font color="white">Jenis Kelamin</th>
            <th class="text-center" bgcolor="#fe3636"><font color="white">Status</th>
            <th class="text-center" bgcolor="#fe3636"><font color="white">Alamat</th>
            <th class="text-center" bgcolor="#fe3636"><font color="white">No Telepon</th>
            <th class="text-center" bgcolor="#fe3636"><font color="white">Photo</th>
            <th class="text-center" bgcolor="#fe3636"><i class="glyphicon glyphicon-cog"></th>
                </tr>
                <?php 
                      $no = 1;
                      $sql_pegawai = mysqli_query($con, "SELECT * FROM t_pegawai095 ORDER BY nik095
                        ASC") or die (mysqli_error($con));
                      while ($data = mysqli_fetch_array($sql_pegawai)) { ?>
                <tr>
                  <td><?=$no++ ?>.</td>
                 <td><?= $data['nik095'] ?></td>
                  <td><?= $data['nama_pegawai095'] ?></td>
                  <td><?= $data['tempat_lahir095'] ?></td>
                  <td><?= $data['tgl_lahir095'] ?></td>
                  <td><?= $data['jenis_kelamin095'] ?></td>
                  <td><?= $data['status095'] ?></td>
                  <td><?= $data['alamat095'] ?></td>
                  <td><?= $data['no_telepon095'] ?></td>
                  <td><?= $data['photo095'] ?></td>
                </tr>
                <?php 
                }
                ?>

  </table>
</body>
</html>