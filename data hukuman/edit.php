<?php require_once ('head.php');
require_once ('header.php');
require_once ('nav.php');
?>

<div class="wrapper">
<div class="content-wrapper">

<section class="content-header">
<h1 class="page-header">Data <small>Hukuman <i class="fa fa-angel-right"></i>Edit&nbsp;</small></h1>

<div class="box box-info box-solid">
	<div class="box-header">
	<h3 class="box-title">Form Master
		<small>Data Hukuman </small>
	</h3>
</div>
	<!-- tools box -->
	<div class="pull-right box-tools">
		<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
			<i class="fa fa-minus"></i></button>
		<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
			<i class="fa fa-times"></i>
		</button>
	</div>
	<!--box-header -->

	<div class="box-body pad">
		<div class="col-sm-10">
			<?php 
									$id= @$_GET['id'];
									$sql_pegawai=mysqli_query($con, "SELECT * FROM t_hukum INNER JOIN t_pegawai095 ON t_hukum.id_pegawai = t_pegawai095.id_pegawai095 WHERE id_hukuman = '$id' ")or die (mysqli_error($con));
									$data =mysqli_fetch_array($sql_pegawai); 
									?>
	<form class="form-horizontal" action="proses.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
			<label for="nik" class="col-md-4 control-label">Nama Pegawai</label>
			<div class="col-sm-8">
				<input type="hidden" name="id" value="<?=$data['id_hukuman']?>">
				<input type="text" class="form-control" name="nama_pegawai" autofocus="" value="<?=$data['nama_pegawai095']?>">
			</div></div>

	 <div class="form-group">
      <label for="inputpegawai" class="col-md-4 control-label">Jenis Hukuman</label>
      <div class="col-sm-8">

      <input type="text" name="jenis_hukuman" class="form-control" value="<?= $data['jenis_hukuman'] ?>" id="jenis_hukuman" required>
             
        </div></div>


<div class="form-group">
      <label for="pengesahan_sk_hukuman" class="col-md-4 control-label">Pejabat Pengesahan SK Hukuman</label>
      <div class="col-sm-8">
      <input type="text" class="form-control" name="pengesahan_sk_hukuman" id="pengesahan_sk_hukuman" placeholder="pengesah" value="<?= $data['pengesahan_sk_hukuman'] ?>" >
    </div>
  </div>

 <div class="form-group">
      <label for="no_pengesahan_sk" class="col-sm-4 control-label">Nomor dan Tanggal Pengesahan SK</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="no_pengesahan_sk" id="no_pengesahan_sk" placeholder="Nomor " value="<?= $data['no_pengesahan_sk'] ?>">
      </div>
      <div class="col-sm-4">
        <div class="input-group date">
        <div class="input-group-addon">
        <i class="fa fa-calendar"></i></div>
        <input type="date" class="form-control pull-right" name="tgl_pengesahan_sk" id="datepicker" value="<?= $data['tgl_pengesahan_sk'] ?>">
      </div>
      </div></div>

 
<div class="form-group">
      <label for="pejabat_pemulih_hukuman" class="col-md-4 control-label">Pejabat Pemulihan Hukuman</label>
      <div class="col-sm-8">
      <input type="text" class="form-control" name="pejabat_pemulih_hukuman" id="pejabat_pemulih_hukuman" placeholder="pemulihan" value="<?= $data['pejabat_pemulih_hukuman'] ?>">
    </div>
  </div>

  <div class="form-group">
      <label for="no_pemulih" class="col-sm-4 control-label">Nomor dan Tanggal Pemulihan Hukuman</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="no_pemulih" id="no_pemulih" placeholder="Nomor" value="<?= $data['no_pemulih'] ?>" >
      </div>
      <div class="col-sm-4">
        <div class="input-group date">
        <div class="input-group-addon">
        <i class="fa fa-calendar"></i></div>
        <input type="date" class="form-control pull-right" name="tgl_pemulih" id="datepicker" value="<?= $data['tgl_pemulih'] ?>"  >
      </div>
      </div></div>
	

	<div class="form-group pull-right">
			<div class="col-sm-10">
			<input type="submit" name="edit" value="Edit" class="btn btn-info">
		</div>
	</div>

</form>
</div>
</div>
</div>
</div>
</section>
<?php include_once ('footer.php');?>

