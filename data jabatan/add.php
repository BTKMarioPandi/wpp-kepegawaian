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
<?php require_once ('head.php');
require_once ('header.php');
require_once ('nav.php');
?>

<div class="wrapper">
<div class="content-wrapper">

<section class="content-header">
<h1 class="page-header">Data <small>Jabatan <i class="fa fa-angel-right"></i>Insert&nbsp;</small></h1>

<div class="box box-info box-solid">
  <div class="box-header">
  <h3 class="box-title">Form Master
    <small>Data Jabatan</small>
  </h3>
   <div class="pull-right box-tools">
    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
      <i class="fa fa-times"></i>
    </button>
  </div>
</div>
  <!-- /.bpx-header -->
  <div class="box-body pad">
  <div class="col-sm-10">
  <form class="form-horizontal" action="proses.php" method="POST" enctype="multipart/form-data">

  <div class="form-group">
      <label for="inputpegawai" class="col-md-4 control-label">Pegawai</label>
      <div class="col-sm-8">
         <select name="nama_pegawai" class="form-control select1" required>
                 <option value="">--Pilih Pegawai--</option>
                 <?php 
                 $sql_pegawai = mysqli_query($con, "SELECT * FROM t_pegawai095 ") or die(mysqli_error($con));
                 while ($data= mysqli_fetch_array($sql_pegawai)){
                  echo '<option value = "'.$data['id_pegawai095'].'">'.$data['nama_pegawai095'].'</option>';
                 }

                  ?>
      </select></div></div>

      <div class="form-group">
      <label for="inputpegawai" class="col-md-4 control-label">Jabatan</label>
      <div class="col-sm-6">
         <select name="nama_jabatan" class="form-control select1" required>
                 <option value="">--Pilih Jabatan--</option>
                 <?php 
                 $sql_pegawai = mysqli_query($con, "SELECT * FROM t_master_jabatan095 ") or die(mysqli_error($con));
                 while ($data= mysqli_fetch_array($sql_pegawai)){
                  echo '<option value = "'.$data['id_m_jabatan095'].'">'.$data['nama_jabatan095'].'</option>';
                 }

                  ?>
      </select></div>
    <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#mjabatan">Add Jabatan</button>
        
        </div>

  <div class="form-group">
      <label for="no_sk" class="col-md-4 control-label">No SK</label>
      <div class="col-sm-8">
      <input type="text" class="form-control" name="no_sk" id="no_sk" placeholder="no sk">
    </div>
  </div>

  <div class="form-group">
      <label for="tempatlahir" class="col-md-4 control-label">SK Mulai Jabatan</label>
      <div class="col-sm-8">
      <div class="input-group date">
        <div class="input-group-addon">
        <i class="fa fa-calendar"></i></div>
        <input type="date" class="form-control pull-right" name="sk_mulai_jabatan" id="datepicker" >
      </div>
    </div></div>

  <div class="form-group">
      <label for="tgl_lahir" class="col-md-4 control-label">SK Berakhir</label>
      <div class="col-sm-8">
      <div class="input-group date">
        <div class="input-group-addon">
        <i class="fa fa-calendar"></i></div>
        <input type="date" class="form-control pull-right" name="sk_berakhir" id="datepicker" >
      </div>
    </div></div>

  <div class="form-group">
      <label for="file_sk" class="col-md-4 control-label">File SK</label>
      <div class="col-sm-8">
      <input type="file" class="form-control" name="file_sk" placeholder=".jp, .jpeg, .png" id="file_sk" required>
    </div>
  </div>

  <div class="form-group pull-right">
      <div class="col-sm-10">
      <input type="submit" name="add" value="Simpan" class="btn btn-info">
    </div>
  </div>

</form>
</div>
</div>
</div>
</div>
</section>
<?php include_once ('footer.php');?>
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
    $('#jabatan').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
<div class="modal modal-primary fade" id="mjabatan" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal_header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Master Data Jabatan</h4>
        </div><br>
        <div class="form-group">
      <form class="form-horizontal" action="prosesjabatan.php" method="POST" enctype="multipart/form-data">

      <label for="nik" class="col-sm-4 control-label">ID Master Jabatan</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="nama_jabatan" id="id_m_jabatan" placeholder="m_jabatan"></div>
        <input type="submit" name="add" value="Simpan" class="btn btn-info"></div>
        <table class="table table-bordered" style="color: #000">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Jabatan</th>
              <th><i class="glyphicon glyphicon-user"></i></th>
            </tr>
          </thead>
          <tbody>
                  <?php
                  $no = 1;
                  $sql_pegawai = mysqli_query($con, "SELECT * FROM t_master_jabatan095 ORDER BY id_m_jabatan095 ASC") or die (mysqli_error($con));
                  while ($data = mysqli_fetch_array($sql_pegawai)) { ?>
                <tr>
                  <td><?= $no++ ?>.</td>
                  
                  <td><?= $data['nama_jabatan095'] ?></td>
                  
                </tr>
                <?php
              }
              ?>
               </tbody>
        </table></form>
        </div>
        </div>
        </div>

