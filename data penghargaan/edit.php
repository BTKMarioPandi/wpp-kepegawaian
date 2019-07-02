<?php require_once ('head.php');
require_once ('header.php');
require_once ('nav.php');
?>

<div class="wrapper">
<div class="content-wrapper">

<section class="content-header">
<h1 class="page-header">Data <small>Penghargaan <i class="fa fa-angel-right"></i>Edit&nbsp;</small></h1>

<div class="box box-info box-solid">
	<div class="box-header">
	<h3 class="box-title">Form Master
		<small>Data Penghargaan </small>
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
									$sql_pegawai=mysqli_query($con, "SELECT * FROM t_penghargaan INNER JOIN t_pegawai085 ON t_penghargaan.id_pegawai = t_pegawai085.id_pegawai085 WHERE id_penghargaan = '$id' ")or die (mysqli_error($con));
									$data =mysqli_fetch_array($sql_pegawai); 
									?>
	<form class="form-horizontal" action="proses.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
			<label for="nik" class="col-md-4 control-label">Nama Pegawai</label>
			<div class="col-sm-8">
				<input type="hidden" name="id" value="<?=$data['id_penghargaan']?>">
				<input type="text" class="form-control" name="nama_pegawai" autofocus="" value="<?=$data['nama_pegawai085']?>">
			</div></div>

	 <div class="form-group">
      <label for="inputpegawai" class="col-md-4 control-label">Nama Penghargaan</label>
      <div class="col-sm-8">

      <input type="text" name="nama_penghargaan" class="form-control" value="<?= $data['nama_penghargaan'] ?>" id="nama_penghargaan" required>
             
        </div></div>

 <div class="form-group">
      <label for="inputpegawai" class="col-md-4 control-label">Tahun</label>
      <div class="col-sm-8">

      <input type="text" name="tahun" class="form-control" value="<?= $data['tahun'] ?>" id="tahun" required>
             
        </div></div>


 <div class="form-group">
      <label for="inputpegawai" class="col-md-4 control-label">Negara</label>
      <div class="col-sm-8">

      <input type="text" name="negara" class="form-control" value="<?= $data['negara'] ?>" id="negara" required>
             
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

