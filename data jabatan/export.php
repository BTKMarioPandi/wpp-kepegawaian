<?php 
require_once "../_config/config.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>DATA JABATAN</title>
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
  header("Content-Disposition: attachment; filename=Data Jabatan.xls");
  ?>

  <center>
    <h1>DAFTAR DATA JABATAN</h1>
  </center>

  <table border="1">
    <tr>
            <th class="text-center" bgcolor="#4682B4"><font color="white">No</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Pegawai</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Jabatan</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">No sk</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Sk mulai jabatan</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Sk berakhir</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">File sk</th>
                </tr>
                <?php
                  $no = 1;
                  $sql_pegawai = mysqli_query($con, "SELECT * FROM t_jabatan095
                        INNER JOIN t_pegawai095 ON t_jabatan095.id_pegawai095 = t_pegawai095.id_pegawai095
                        INNER JOIN t_master_jabatan095 ON t_jabatan.id_m_jabatan095 = t_master_jabatan.id_m_jabatan095 ") or die (mysqli_error($con));
                  while ($data = mysqli_fetch_array($sql_pegawai)) { ?>
                  <td><?=$no++ ?>.</td>
                 <td><?= $data['nama_pegawai095'] ?></td>
                  <td><?= $data['nama_jabatan095'] ?></td>
                  <td><?= $data['no_sk095'] ?></td>
                  <td><?= $data['sk_mulai_jabatan095'] ?></td>
                  <td><?= $data['sk_berakhir095'] ?></td>
                  <td><?= $data['file_sk095'] ?></td>
                </tr>
                <?php 
                }
                ?>

  </table>
</body>
</html>