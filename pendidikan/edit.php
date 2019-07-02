<?php require_once ('head.php');
require_once ('header.php');
require_once ('nav.php');
?>

<div class="wrapper">
<div class="content-wrapper">

<section class="content-header">
<h1 class="page-header">Data <small>Pendidikan <i class="fa fa-angel-right"></i>Edit&nbsp;</small></h1>

<div class="box box-info box-solid">
	<div class="box-header">
	<h3 class="box-title">Form Master
		<small>Data Pendidikan </small>
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
									$sql_pegawai=mysqli_query($con, "SELECT * FROM t_pendidikan095 INNER JOIN t_pegawai095 ON t_pendidikan095.id_pegawai095 = t_pegawai095.id_pegawai095 WHERE id_pendidikan095 = '$id' ")or die (mysqli_error($con));
									$data =mysqli_fetch_array($sql_pegawai); 
									?>
	<form class="form-horizontal" action="proses.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
			<label for="nik" class="col-md-4 control-label">Nama Pegawai</label>
			<div class="col-sm-8">
				<input type="hidden" name="id" value="<?=$data['id_pendidikan095']?>">
				<input type="text" class="form-control" name="nama_pegawai095" autofocus="" value="<?=$data['nama_pegawai095']?>">
			</div></div>

			<div class="form-group">
			<label for="nama" class="col-md-4 control-label">Tingkat</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="tingkat095" value="<?=$data['tingkat095']?>" placeholder="Tingkat">
			</div></div>

			<div class="form-group">
			<label for="nama" class="col-md-4 control-label">Nama PT</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="nama_pt095" value="<?=$data['nama_pt095']?>" placeholder="Tingkat">
			</div></div>

			<div class="form-group">
			<label for="nik" class="col-sm-4 control-label">Lokasi</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="lokasi095" value="<?=$data['lokasi095']?>" placeholder="Tempat Lahir">
			</div></div>
			<div class="form-group">
			<label for="nik" class="col-sm-4 control-label">Jurusan</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="jurusan095" value="<?=$data['jurusan095']?>" placeholder="yyyy-mm-dd">
			</div></div>
			<div class="form-group">
			<label for="nik" class="col-sm-4 control-label">No. Ijazah</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="no_ijazah095"  value="<?=$data['no_ijazah095']?>" placeholder="Jenis Kelamin">
			</div></div>
			<div class="form-group">
			<label for="nik" class="col-sm-4 control-label">Tanggal</label>
			<div class="col-sm-8">
				<input type="yyyy-mm-dd" class="form-control" name="tgl_ijazah095"  placeholder="Status" value="<?=$data['tgl_ijazah095']?>">
			</div></div>
		

			<div class="form-group">
			<label for="nik" class="col-sm-4 control-label">Photo</label>
			<img src="../_assets/img_pendidikan/<?=$data['file_ijazah095']?>" width="85" >
			<div class="col-sm-4">
				<input type="file" class="form-control" name="file_ijazah095"  value="<?=$data['file_ijazah095']?>" >
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

