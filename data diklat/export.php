<?php 
require_once "../_config/config.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>DATA DIKLAT</title>
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
  header("Content-Disposition: attachment; filename=Data Diklat.xls");
  ?>

  <center>
    <h1>DAFTAR DATA DIKLAT</h1>
  </center>

  <table border="1">
    <tr>
            <th class="text-center" bgcolor="#4682B4"><font color="white">No</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Pegawai</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Nama Diklat</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Jumlah Jam</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Penyelenggara</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Tempat</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Angkatan</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Tahun</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">No STTPP</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Tanggal STTP</th>
                  <th class="text-center" bgcolor="#4682B4"><font color="white">Sertifikat</th>
                </tr>
               <?php
                  $no = 1;
                  $sql_pegawai = mysqli_query($con, "SELECT * FROM t_diklat
                        INNER JOIN t_pegawai001 ON t_diklat.id_pegawai = t_pegawai001.id_pegawai001 ") or die (mysqli_error($con));
                  while ($data = mysqli_fetch_array($sql_pegawai)) { ?>
                <tr>
                  <td><?=$no++ ?>.</td>
                 <td><?= $data['nama_pegawai001'] ?></td>
                  <td><?= $data['nama_diklat'] ?></td>
                  <td><?= $data['jumlah_jam'] ?></td>
                  <td><?= $data['penyelenggara'] ?></td>
                  <td><?= $data['tempat'] ?></td>
                  <td><?= $data['angkatan'] ?></td>
                  <td><?= $data['tahun'] ?></td>
                  <td><?= $data['no_sttpp'] ?></td>
                  <td><?= $data['tanggal_sttpp'] ?></td>
                  <td><?= $data['sertifikat'] ?></td>
                </tr>
                <?php 
                }
                ?>

  </table>
</body>
</html>