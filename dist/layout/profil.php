<?php 
require_once "../_config/config.php";
require_once "header.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ipedeni Christian Harita | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <?php 
include_once('header.php')
  ?>
  <?php 
include_once('nav.php')
  ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Diklat SMP N 23 PEKANBARU
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Diklat</li>
      </ol>

      <div class="pull-right">
        <a href="export.php" class="btn btn-success btn-sm"><i class="fa fa-file-excel-o"> &nbsp;Exsport With Excel</i></a>
        <a href="add.php" class="btn btn-success btn-sm m-b-10"><i class="fa fa-file-plus-circle"> &nbsp;Tambah Diklat</i></a>
        </div>
            
        <div style="margin-bottom: 10px; margin-top: 40px">
        <form method="post" name="proses">
        <div class="box box-success box-solid">

          <div class="body-body pad">
          <div class="table-responsive">
              <table id="t_diklat" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="text-center" bgcolor="red"><font color="white">No</th>
                  <th class="text-center" bgcolor="red"><font color="white">Pegawai</th>
                  <th class="text-center" bgcolor="red"><font color="white">Nama Diklat</th>
                  <th class="text-center" bgcolor="red"><font color="white">Jumlah Jam</th>
                  <th class="text-center" bgcolor="red"><font color="white">Penyelenggara</th>
                  <th class="text-center" bgcolor="red"><font color="white">Tempat</th>
                  <th class="text-center" bgcolor="red"><font color="white">Angkatan</th>
                  <th class="text-center" bgcolor="red"><font color="white">Tahun</th>
                  <th class="text-center" bgcolor="red"><font color="white">No STTPP</th>
                  <th class="text-center" bgcolor="red"><font color="white">Tanggal STTP</th>
                  <th class="text-center" bgcolor="red"><font color="white">Sertifikat</th>
                  <th><i class="glyphicon glyphicon-cog"> </th>
                </tr>
                </thead>
                <tbody>
                  
                   <?php
                  $no = 1;
                  $sql_pegawai = mysqli_query($con, "SELECT * FROM t_diklat
                        INNER JOIN t_pegawai001 ON t_diklat.id_pegawai = t_pegawai027.id_pegawai027 ") or die (mysqli_error($con));
                  while ($data = mysqli_fetch_array($sql_pegawai)) { ?>
                <tr>
                  <td><?= $no++ ?>.</td>
                  <td><?= $data['nama_pegawai001'] ?></td>
                  <td><?= $data['nama_diklat'] ?></td>
                  <td><?= $data['jumlah_jam'] ?></td>
                  <td><?= $data['penyelenggara'] ?></td>
                  <td><?= $data['tempat'] ?></td>
                  <td><?= $data['angkatan'] ?></td>
                  <td><?= $data['tahun'] ?></td>
                  <td><?= $data['no_sttpp'] ?></td>
                  <td><?= $data['tanggal_sttpp'] ?></td>
                  <td><img src="../_assets/img_dik/<?=$data['sertifikat']?>" width='100'></td>
                  <td class="text-center">
                    <a href="edit.php?id=<?=$data['id_diklat']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></button>
                    <a href="delete.php?id=<?=$data['id_diklat']?>" onclick="return confirm ('Yakin Mau Di Hapus?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></button>
                  </td>
                </tr>
                <?php
              }
              ?>
               
              </table>
            </div>
          </div>
               </form>
                </tbody>
            </div>
            <!-- /.box-body -->
    </section>
    <!-- /.content -->
  </div>

  <script>
    function edit(){
        document.proses.action = 'edit.php';
        document.proses.submit();
      }

    function hapus(){
      var conf = confirm('Yakin akan menghapus data?');
      if(conf){
        document.proses.action = 'delete.php';
        document.proses.submit();
      }
    }
  </script>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
   <strong>Copyright <a href="https://g.co/kgs/mSKpua">SMPN 23 PEKANBARU</a>.</strong> All rights reserved.
  </footer>
  <!-- jQuery 3 -->
<script src="<?php echo base_url() ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#t_pegawai').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
