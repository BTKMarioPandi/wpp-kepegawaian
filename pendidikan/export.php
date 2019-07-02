<?php 
require_once "../_config/config.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>DATA PENDIDIKAN</title>
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
  header("Content-Disposition: attachment; filename=Data Pendidikan.xls");
  ?>

  <center>
    <h1>DAFTAR DATA PENDIDIKAN</h1>
  </center>

  <table border="1">
    <tr>
            <th class="text-center" bgcolor="#fe3636"><font color="black">No</th>
                  <th class="text-center" bgcolor="#fe3636"><font color="black">Pegawai</th>
                  <th class="text-center" bgcolor="#fe3636"><font color="black">Tingkat</th>
                  <th class="text-center" bgcolor="#fe3636"><font color="black">Nama Perguruan Tinggi</th>
                  <th class="text-center" bgcolor="#fe3636"><font color="black">Lokasi</th>
                  <th class="text-center" bgcolor="#fe3636"><font color="black">Jurusan</th>
                  <th class="text-center" bgcolor="#fe3636"><font color="black">No Ijazah</th>
                  <th class="text-center" bgcolor="#fe3636"><font color="black">Tanggal Ijazah</th>
                  <th class="text-center" bgcolor="#fe3636"><font color="black">File Ijazah</th>
                </tr>
                <?php
                  $no = 1;
                  $sql_pegawai = mysqli_query($con, "SELECT * FROM t_pendidikan095
                        INNER JOIN t_pegawai095 ON t_pendidikan.id_pegawai = t_pegawai095.id_pegawai095 ") or die (mysqli_error($con));
                  while ($data = mysqli_fetch_array($sql_pegawai)) { ?>
                <tr>
                  <td><?=$no++ ?>.</td>
                 <td><?=$data['nama_pegawai095'] ?></td>
                  <td><?=$data['tingkat095'] ?></td>
                  <td><?=$data['nama_pt095'] ?></td>
                  <td><?=$data['lokasi095'] ?></td>
                  <td><?=$data['jurusan095'] ?></td>
                  <td><?=$data['no_ijazah095'] ?></td>
                  <td><?=$data['tgl_ijazah095'] ?></td>
                  <td><?=$data['file_ijazah095'] ?></td>
                </tr>
                <?php 
                }
                ?>

  </table>
</body>
</html>