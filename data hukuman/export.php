<?php 
require_once "../_config/config.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>DATA HUKUMAN</title>
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
  header("Content-Disposition: attachment; filename=Data Hukuman.xls");
  ?>

  <center>
    <h1>DAFTAR DATA HUKUMAN</h1>
  </center>

  <table border="1">
    <tr>
            <th class="text-center" bgcolor="#4682B4"><font color="white">No</th>
          <th class="text-center" bgcolor="#4682B4"><font color="white">Pegawai</th>
          <th class="text-center" bgcolor="#4682B4"><font color="white">Jenis Hukuman</th>
          <th class="text-center" bgcolor="#4682B4"><font color="white">Pejabat Pengesahan SK Hukuman</th>
          <th class="text-center" bgcolor="#4682B4"><font color="white">No Pengesahan SK</th>
          <th class="text-center" bgcolor="#4682B4"><font color="white">Tgl Pengesahan SK</th>
          <th class="text-center" bgcolor="#4682B4"><font color="white">Pejabat Pemulihan Hukuman</th>
          <th class="text-center" bgcolor="#4682B4"><font color="white">No Pemulihan Hukuman</th>
          <th class="text-center" bgcolor="#4682B4"><font color="white">Tgl Pemulihan Hukuman</th>
                </tr>
               <?php
                  $no = 1;
                  $sql_pegawai = mysqli_query($con, "SELECT * FROM t_hukum
                        INNER JOIN t_pegawai001 ON t_hukum.id_pegawai = t_pegawai001.id_pegawai001
                        ") or die (mysqli_error($con));
                  while ($data = mysqli_fetch_array($sql_pegawai)) { ?>
                <tr>
                  <td><?=$no++ ?>.</td>
                 <td><?= $data['nama_pegawai001'] ?></td>
                  <td><?= $data['jenis_hukuman'] ?></td>
                  <td><?= $data['pengesahan_sk_hukuman'] ?></td>
                  <td><?= $data['no_pengesahan_sk'] ?></td>
                  <td><?= $data['tgl_pengesahan_sk'] ?></td>
                  <td><?= $data['pejabat_pemulih_hukuman'] ?></td>
                  <td><?= $data['no_pemulih'] ?></td>
                  <td><?= $data['tgl_pemulih'] ?></td>
                </tr>
                <?php 
                }
                ?>

  </table>
</body>
</html>