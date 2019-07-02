<?php 
require_once "../_config/config.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>DATA PANGKAT</title>
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
  header("Content-Disposition: attachment; filename=Data Pangkat.xls");
  ?>

  <center>
    <h1>DAFTAR DATA PANGKAT</h1>
  </center>

  <table border="1">
    <tr>
            <th class="text-center" bgcolor="#4682B4"><font color="white">No</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Nama Pegawai</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">M Pegawai</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Golongan</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">No SK</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Tgl SK</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Tgl Mulai</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Tgl Akhir</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">File SK</th>
                </tr>
                <?php
                  $no = 1;
                  $sql_pegawai = mysqli_query($con, "SELECT * FROM t_pangkat
                         JOIN t_pegawai085 ON t_pangkat.id_pegawai = t_pegawai085.id_pegawai085
                         JOIN t_master_pangkat ON t_pangkat.id_m_pangkat = t_master_pangkat.id_m_pangkat 
                         JOIN t_golongan ON t_pangkat.id_golongan = t_golongan.id_golongan") or die (mysqli_error($con));
                  while ($data = mysqli_fetch_array($sql_pegawai)) { ?>
                <tr>
                  <td><?=$no++ ?>.</td>
                 <td><?= $data['nama_pegawai085'] ?></td>
                  <td><?= $data['nama_pangkat'] ?></td>
                  <td><?= $data['nama_golongan'] ?></td>
                  <td><?= $data['no_sk'] ?></td>
                  <td><?= $data['tgl_sk'] ?></td>
                  <td><?= $data['tgl_mulai'] ?></td>
                  <td><?=$data['tgl_berakhir'] ?></td>
                  <td><?= $data['file_sk'] ?></td>
                </tr>
                <?php 
                }
                ?>

  </table>
</body>
</html>