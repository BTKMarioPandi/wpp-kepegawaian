<?php 
require_once "../_config/config.php"; 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Imam Hazwa  | Data Tables</title>
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
       folder instead of downloading all of them to 19d5fduce the load. -->
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
        Report Data Pegawai Imam Hazwa 
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Report Data Pegawai Imam Hazwa </li>
      </ol>

      <div class="pull-right">
      
      <i>Print Semua Disini ---</i>
       <button class="btn btn-danger btn-ms" onclick="print()" name="tprint" value="<?= $data['id_pegawai085']?>"><i class="glyphicon glyphicon-print"></i></button>
        </div>
            
        <div style="margin-bottom: 10px; margin-top: 40px">
        <form method="post" name="proses">
        <div class="box box-info box-solid">

          <div class="body-body pad">
          <div class="table-responsive">
              <table id="t_pegawai085" class="table table-borde19d5fd table-striped">
                <thead>
                <tr>
            <th class="text-center" bgcolor="19d5fd"><font color="black">No</th>
            <th class="text-center" bgcolor="19d5fd"><font color="black">Nik</th>
            <th class="text-center" bgcolor="19d5fd"><font color="black">Nama Pegawai</th>
            <th class="text-center" bgcolor="19d5fd"><font color="black">Tempat Lahir</th>
            <th class="text-center" bgcolor="19d5fd"><font color="black">Tgl Lahir</th>
            <th class="text-center" bgcolor="19d5fd"><font color="black">Jenis Kelamin</th>
            <th class="text-center" bgcolor="19d5fd"><font color="black">Status</th>
            <th class="text-center" bgcolor="19d5fd"><font color="black">Alamat</th>
            <th class="text-center" bgcolor="19d5fd"><font color="black">No Telepon</th>
            <th class="text-center" bgcolor="19d5fd"><font color="black">Photo</th>
            <th class="text-center" bgcolor="#19d5fd"><i class="glyphicon glyphicon-cog"></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $sql_pegawai = mysqli_query($con, "SELECT * FROM t_pegawai085 ORDER BY nik085 DESC") or die (mysqli_error($con));
                  while ($data = mysqli_fetch_array($sql_pegawai)) { ?>
                <tr>
                  <td><?= $no++ ?>.</td>
                  <td><?= $data['nik085'] ?></td>
                  <td><?= $data['nama_pegawai085'] ?></td>
                  <td><?= $data['tempat_lahir085'] ?></td>
                  <td><?= $data['tgl_lahir085'] ?></td>
                  <td><?= $data['jenis_kelamin085'] ?></td>
                  <td><?= $data['status085'] ?></td>
                  <td><?= $data['alamat085'] ?></td>
                  <td><?= $data['no_telepon085'] ?></td>
                  <td><img src="../_assets/img_pegawai/<?= $data['photo085'] ?>" width='100'></td>
                  <td class="text-center">
                    
                    <button class="btn btn-danger btn-xs" onclick="print()" name="tprint" value="<?= $data['id_pegawai085']?>"><i class="glyphicon glyphicon-print"></i></button>
        </div>
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
  function print();       
  </script>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright <a href="https://g.co/kgs/mSKpua">Imam Hazwa</a>.</strong> All rights reserved.
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
