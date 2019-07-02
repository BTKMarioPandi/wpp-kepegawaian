<?php 
require_once "../_config/config.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin095 | Data Tables</title>
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
<?php require_once ('head.php');
require_once ('header.php');
require_once ('nav.php');
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <h1>
        Data Pendidikan
        <small>Control Panel</small>
      </h1>
   
          <!-- tools box-->
      <div class="box box-info box-solid">

      <div class="box-header">
        <h2 class="box-title" > Data Pendidikan
          </h2>
          <div class="pull-right box-tools">

            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button></div>
                <!-- tools-->
              </div>
            <div class="box-body pad">
				<div class="col-sm-10">
					<form class="form-horizontal" action="proses.php" method="POST" enctype="multipart/form-data">


		<div class="form-group">
      <label for="inputpegawai" class="col-md-4 control-label">Nama Pegawai</label>
      <div class="col-sm-8">
         <select name="nama_pegawai095" class="form-control select1" required>
                 <option value="">--Pilih Pegawai--</option>
                 <?php 
                 $sql_pegawai = mysqli_query($con, "SELECT * FROM t_pegawai095 ") or die(mysqli_error($con));
                 while ($data= mysqli_fetch_array($sql_pegawai)){
                  echo '<option value = "'.$data['id_pegawai095'].'">'.$data['nama_pegawai095'].'</option>';
                 }

                  ?>
      </select></div></div>

      <div class="form-group">
      <label class="col-sm-4 control-label">Tingkat</label>
      <div class="col-sm-8">
       <select type="text" name="tingkat" class="form-control" id="tingkat095" required>
        <option>--Pilih Tingkat--</option>
        <option value="SLTA">SLTA</option>
        <option value="D III">D III</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
                    ?></select>     
                </div></div>

      <div class="form-group">
      <label for="nik" class="col-sm-4 control-label">Nama Perguruan Tinggi</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="nama_pt095" id="nama_pt095" placeholder="Nama Sekolah/Universitas">
      </div></div>

      <div class="form-group">
      <label for="nik" class="col-sm-4 control-label">Jurusan</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="jurusan095" id="jurusan095" placeholder="Jurusan ">
      </div></div>

      <div class="form-group">
      <label for="nik" class="col-sm-4 control-label">Lokasi</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="lokasi095" id="lokasi095" placeholder="lokasi ">
      </div></div>


      <div class="form-group">
      <label for="no_ijazah" class="col-sm-4 control-label">Nomor dan Tanggal Ijazah</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="no_ijazah095" id="no_ijazah095" placeholder="Nomor Ijazah">
      </div>
      <div class="col-sm-4">
        <div class="input-group date">
        <div class="input-group-addon">
        <i class="fa fa-calendar"></i></div>
        <input type="date" class="form-control pull-right" name="tgl_ijazah095" id="datepicker" >
      </div>
      </div></div>


      

  <div class="form-group">
      <label for="file_sk" class="col-md-4 control-label">File Ijazah</label>
      <div class="col-sm-8">
      <input type="file" class="form-control" name="file_ijazah095" placeholder=".jp, .jpeg, .png" id="file_ijazah" required>
    </div>
  </div>


		

			<div class="form-group pull-right">
			<div class="col-sm-10">
			<input type="submit" name="add" value="Simpan" class="btn btn-info"></div></div></form></div></div></div></div></div>
		    
       <!-- /.content -->
   <script>
  function print();       
  </script>


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright <a href="https://g.co/kgs/mSKpua">Mario Pandi</a>.</strong> All rights reserved.
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
