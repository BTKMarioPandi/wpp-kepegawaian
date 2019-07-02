<?php require_once ('head.php');
require_once ('header.php');
require_once ('nav.php');
?>

<div class="wrapper">
<div class="content-wrapper">

<section class="content-header">
<h1 class="page-header">Data <small>Diklat <i class="fa fa-angel-right"></i>Edit&nbsp;</small></h1>

<div class="box box-info box-solid">
	<div class="box-header">
	<h3 class="box-title">Form Master
		<small>Data Diklat </small>
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
			$id = @$_GET['id'];
			$sql_pegawai = mysqli_query($con, "SELECT * FROM t_diklat
                         WHERE id_diklat = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_pegawai);
			?>
		<form class="form-horizontal" action="proses.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="pegawai" class="col-md-4 control-label">Pegawai</label>
			<div class="col-sm-8">
			<input type="hidden" name="id" value="<?=$data['id_diklat']?>">
				<input type="hidden" name="nama_pegawai" value="<?=$data['id_pegawai027']?>">
				<?php 
				$idp= $data['id_pegawai'];
				$sqlp=mysqli_query($con,"select * from t_pegawai027 where id_pegawai027='$idp'");
				while($d=mysqli_fetch_array($sqlp)){?>
				<input type="text" class="form-control" name="nama_pegawai" placeholder="NIDN" autofocus="" value="<?=$d['nama_pegawai027']?>">

				 <?php
				}
				?>
		</div>
	</div>

	 <div class="form-group">
      <label for="nama_diklat" class="col-md-4 control-label">Nama Diklat</label>
      <div class="col-sm-8">
      <input type="text" class="form-control" name="nama_diklat" id="nama_diklat" value="<?= $data['nama_diklat'] ?>"  placeholder="nama_diklat">
    </div>
  </div>

	<div class="form-group">
      <label for="jumlah_jam" class="col-md-4 control-label">Jumlah Jam</label>
      <div class="col-sm-8">
      <input type="text" class="form-control" name="jumlah_jam" value="<?= $data['jumlah_jam'] ?>" id="jumlah_jam" placeholder="jumlah_jam">
    </div>
  </div>

	 <div class="form-group">
      <label for="penyelenggara" class="col-md-4 control-label">Penyelenggara</label>
      <div class="col-sm-8">
      <input type="text" class="form-control" name="penyelenggara" value="<?= $data['penyelenggara'] ?>" id="penyelenggara" placeholder="penyelenggara">
    </div>
  </div>

<div class="form-group">
      <label for="tempat" class="col-md-4 control-label">Tempat</label>
      <div class="col-sm-8">
      <input type="text" class="form-control" name="tempat" value="<?= $data['tempat'] ?>" id="tempat" placeholder="tempat">
    </div>
  </div>

  <div class="form-group">
      <label for="angkatan" class="col-md-4 control-label">Angkatan</label>
      <div class="col-sm-8">
      <input type="text" class="form-control" name="angkatan" value="<?= $data['angkatan'] ?>" id="angkatan" placeholder="angkatan">
    </div>
  </div>

  <div class="form-group">
      <label for="tahun" class="col-md-4 control-label">Tahun</label>
      <div class="col-sm-8">
      <input type="text" class="form-control" name="tahun" value="<?= $data['tahun'] ?>" id="tahun" placeholder="tahun">
    </div>
  </div>

<div class="form-group">
      <label for="no_sttpp" class="col-sm-4 control-label">Nomor dan Tanggal STTPP</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="no_sttpp" value="<?= $data['no_sttpp'] ?>" id="no_sttpp" placeholder=" no_sttpp">
      </div>
      <div class="col-sm-4">
        <div class="input-group date">
        <div class="input-group-addon">
        <i class="fa fa-calendar"></i></div>
        <input type="date" class="form-control pull-right" name="tanggal_sttpp"  value="<?= $data['tanggal_sttpp'] ?>" id="datepicker" >
      </div>
      </div></div>
 
  <div class="form-group">
			<label for="sertifikat" class="col-sm-4 control-label">Sertifikat</label>
			<img src="../_assets/img_diklat/<?=$data['sertifikat']?>" width="50" >
			<div class="col-sm-4">
				<input type="file" class="form-control" name="sertifikat"  value="<?=$data['sertifikat']?>" >
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

