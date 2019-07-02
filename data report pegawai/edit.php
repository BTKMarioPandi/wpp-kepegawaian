<?php require_once ('head.php');
require_once ('header.php');
require_once ('nav.php');
?>

<div class="wrapper">
<div class="content-wrapper">

<section class="content-header">
<h1 class="page-header">Data <small>Pegawai <i class="fa fa-angel-right"></i>Edit&nbsp;</small></h1>

<div class="box box-success box-solid">
	<div class="box-header">
	<h3 class="box-title">Form Master
		<small>Data Pegawai</small>
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
	<!-- /.bpx-header -->

	<div class="box-body pad">
		<div class="col-sm-10">
			<?php
			$id = $_POST['tedit'];
			$sql_pegawai = mysqli_query($con, "SELECT * FROM t_pegawai085 WHERE id_pegawai085 = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_pegawai);
			?>
		<form class="form-horizontal" action="proses.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="nik" class="col-md-4 control-label">NIK</label>
			<div class="col-sm-8">
			<input type="hidden" class="form-control" name="id_pegawai085" value="<?= $data['id_pegawai085'] ?>">
			<input type="text" class="form-control" name="nik085" value="<?= $data['nik085'] ?>" autofocus>
		</div>
	</div>

	<div class="form-group">
			<label for="nama" class="col-md-4 control-label">Nama Lengkap</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="nama_pegawai085" value="<?= $data['nama_pegawai085'] ?>">
		</div>
	</div>

	<div class="form-group">
			<label for="tempatlahir" class="col-md-4 control-label">Tempat Lahir</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="tempat_lahir085" value="<?= $data['tempat_lahir085'] ?>" >
		</div>
	</div>

	<div class="form-group">
			<label for="tgl_lahir" class="col-md-4 control-label">Tanggal Lahir</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="tgl_lahir085" value="<?= $data['tgl_lahir085'] ?>" >
		</div>
	</div>

	<div class="form-group">
			<label for="jenis_kelamin" class="col-md-4 control-label">Jenis Kelamin</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="jenis_kelamin085" value="<?= $data['jenis_kelamin085'] ?>" >
		</div>
	</div>

	<div class="form-group">
			<label for="status" class="col-md-4 control-label">Status</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="status085" value="<?= $data['status085'] ?>" >
		</div>
	</div>

	<div class="form-group">
			<label for="alamat" class="col-md-4 control-label">Alamat</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="alamat085" value="<?= $data['alamat085'] ?>" >
		</div>
	</div>

	<div class="form-group">
			<label for="no_telepon" class="col-md-4 control-label">No Telepon</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="no_telepon085" value="<?= $data['no_telepon085'] ?>" >
		</div>
	</div>

	<div class="form-group">
			<label for="photo" class="col-md-4 control-label">Photo</label>
			<img src="../_assets/img_pegawai/<?=$data['photo085'] ?>">
			<div class="col-sm-4">
			<input type="file" class="form-control" name="photo085" value="<?= $data['photo085'] ?>" id="photo" >
		</div>
	</div>

	<div class="form-group pull-right">
			<div class="col-sm-10">
			<input type="submit" name="edit" value="Edit" class="btn btn-success">
		</div>
	</div>

</form>
</div>
</div>
</div>
</div>
</section>
<?php include_once ('footer.php');?>

