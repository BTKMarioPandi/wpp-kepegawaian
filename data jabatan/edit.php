<?php require_once ('head.php');
require_once ('header.php');
require_once ('nav.php');
?>

<div class="wrapper">
<div class="content-wrapper">

<section class="content-header">
<h1 class="page-header">Data <small>Jabatan <i class="fa fa-angel-right"></i>Edit&nbsp;</small></h1>

<div class="box box-info box-solid">
	<div class="box-header">
	<h3 class="box-title">Form Master
		<small>Data Jabatan </small>
	</h3>
		<!-- tools box -->
	<div class="pull-right box-tools">
		<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
			<i class="fa fa-minus"></i></button>
		<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
			<i class="fa fa-times"></i>
		</button>
	</div>
	<!--box-header -->

</div>

	<div class="box-body pad">
		<div class="col-sm-10">
			<?php
			$id = @$_GET['id'];
			$sql_pegawai = mysqli_query($con, "SELECT * FROM t_jabatan095
                         WHERE id_jabatan095 = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_pegawai);
			?>
		<form class="form-horizontal" action="proses.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="pegawai" class="col-md-4 control-label">Pegawai</label>
			<div class="col-sm-8">
			<input type="hidden" name="id" value="<?=$data['id_jabatan095']?>">
				<input type="hidden" name="nama_pegawai" value="<?=$data['id_pegawai095']?>">
				<?php 
				$idp= $data['id_pegawai095'];
				$sqlp=mysqli_query($con,"select * from t_pegawai095 where id_pegawai095='$idp'");
				while($d=mysqli_fetch_array($sqlp)){?>
				<input type="text" class="form-control" name="nama_pegawai" placeholder="NIDN" autofocus="" value="<?=$d['nama_pegawai095']?>">

				 <?php
				}
				?>
		</div>
	</div>

	 <div class="form-group">
			<label for="nama" class="col-md-4 control-label">Jabatan</label>
			<div class="col-sm-8">
				<input type="hidden" name="id" value="<?= $data['id_jabatan095'] ?>">
				<input type="hidden" name="nama_jabatan" value="<?=$data['id_m_jabatan']?>">
			<?php 
				$idp= $data['id_m_jabatan095'];
				$sqlp=mysqli_query($con,"select * from t_master_jabatan095 where id_m_jabatan095='$idp'");
				while($d=mysqli_fetch_array($sqlp)){?>
				<input type="text" class="form-control" name="nama_jabatan" placeholder="NIDN" autofocus="" value="<?=$d['nama_jabatan095']?>">

				 <?php
				}
				?>
		</div>
	</div>

	<div class="form-group">
			<label for="tempatlahir" class="col-md-4 control-label">No SK</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="no_sk" value="<?= $data['no_sk095'] ?>" >
		</div>
	</div>

	<div class="form-group">
			<label for="tgl_lahir" class="col-md-4 control-label">SK Mulai Jabatan</label>
			<div class="col-sm-8">
			<input type="date" class="form-control" name="sk_mulai_jabatan" value="<?= $data['sk_mulai_jabatan095'] ?>" >
		</div>
	</div>

	<div class="form-group">
			<label for="jenis_kelamin" class="col-md-4 control-label">SK Berakhir</label>
			<div class="col-sm-8">
			<input type="date" class="form-control" name="sk_berakhir" value="<?= $data['sk_berakhir095'] ?>" >
		</div>
	</div>

	<div class="form-group">
			<label for="photo" class="col-md-4 control-label">File SK</label>
			<img src="../_assets/img_jabatan/<?=$data['file_sk095'] ?>" width="50">
			<div class="col-sm-4">
			<input type="file" class="form-control" name="file_sk" value="<?= $data['file_sk095'] ?>" >
		</div>
	</div> 


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

