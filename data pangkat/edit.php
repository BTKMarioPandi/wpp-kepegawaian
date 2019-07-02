<?php  require_once ('head.php');  ?>
<?php  require_once ('header.php');?>
<?php  require_once ('nav.php');?>

<div class="wrapper">
	<div class="content-wrapper">

<section class="content-header">
	<h1 class="page-header">Form Edit<small>Pangkat<i class="fa fa-angel-right"></i>Edit&nbsp;</small></h1>
		<div class="box box-primary box-solid">
			<div class="box-header" align="center">
				<h3 class="box-title">Edit Data Pangkat
					</h3>
					<!-- tools box-->
					<div class="pull-right box-tools">
						<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
							<i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fa fa-times"></i></button></div>
								<!-- tools-->
							</div>
							<!-- box header-->
							<div class="box-body pad">
								<div class="col-sm-10">
									<?php 
									$id= @$_GET['id'];
									$sql_pegawai=mysqli_query($con, "SELECT * FROM t_pangkat WHERE id_pangkat = '$id' ") or die (mysqli_error($con));
									$data =mysqli_fetch_array($sql_pegawai); 
									?>
	<form class="form-horizontal" action="proses.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
			<label for="nik" class="col-md-4 control-label">Pegawai</label>
			<div class="col-sm-8">
				<input type="hidden" name="id" value="<?=$data['id_pangkat']?>">
				<input type="hidden" name="nama_pegawai085" value="<?=$data['id_pegawai085']?>">
				<?php 
				$idp= $data['id_pegawai'];
				$sqlp=mysqli_query($con,"select * from t_pegawai085 where id_pegawai085='$idp'");
				while($d=mysqli_fetch_array($sqlp)){?>
				<input type="text" class="form-control" name="nama_pegawai085" placeholder="NIDN" autofocus="" value="<?=$d['nama_pegawai085']?>">

				 <?php
				}
				?>
			</div></div>

			<div class="form-group">
			<label for="nama" class="col-md-4 control-label">M Pangkat</label>
			<div class="col-sm-8">
				<input type="hidden" name="id" value="<?=$data['id_pangkat']?>">
				<input type="hidden" name="nama_pangkat" value="<?=$data['id_m_pangkat']?>">
				<?php 
				$idp= $data['id_m_pangkat'];
				$sqlp=mysqli_query($con,"select * from t_master_pangkat where id_m_pangkat='$idp'");
				while($d=mysqli_fetch_array($sqlp)){?>
				<input type="text" class="form-control" name="nama_pangkat" placeholder="NIDN" autofocus="" value="<?=$d['nama_pangkat']?>">

				 <?php
				}
				?>
			</div></div>

			<div class="form-group">
			<label for="nik" class="col-sm-4 control-label">Golongan</label>
			<div class="col-sm-8">
				<input type="hidden" name="id" value="<?=$data['id_pangkat']?>">
				<input type="hidden" name="nama_golongan043" value="<?=$data['id_golongan']?>">
				<?php 
				$idp= $data['id_golongan'];
				$sqlp=mysqli_query($con,"select * from t_golongan where id_golongan='$idp'");
				while($d=mysqli_fetch_array($sqlp)){?>
				<input type="text" class="form-control" name="nama_golongan" placeholder="NIDN" autofocus="" value="<?=$d['nama_golongan']?>">

				 <?php
				}
				?>
			</div></div>

			<div class="form-group">
			<label for="nik" class="col-sm-4 control-label">NO SK</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="no_sk" value="<?=$data['no_sk']?>" placeholder="text">
			</div></div>
			<div class="form-group">
			<label for="nik" class="col-sm-4 control-label">TGL SK</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="tgl_sk"  value="<?=$data['tgl_sk']?>" placeholder="Jenis Kelamin">
			</div></div>
			<div class="form-group">
			<label for="nik" class="col-sm-4 control-label">TGL Mulai</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="tgl_mulai"  placeholder="Status" value="<?=$data['tgl_mulai']?>">
			</div></div>
		
			<div class="form-group">
			<label for="nik" class="col-sm-4 control-label">TGL Akhir</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="tgl_berakhir"  placeholder="Status" value="<?=$data['tgl_berakhir']?>">
			</div></div>

			<div class="form-group">
			<label for="nik" class="col-sm-4 control-label">File Sk</label>
			<img src="../_assets/img_pangkat/<?=$data['file_sk']?>" width="90" >
			<div class="col-sm-4">
				<input type="file" class="form-control" name="file_sk"  value="<?=$data['file_sk']?>" >
			</div></div>

			<div class="form-group pull-right">
			<div class="col-sm-10">
			<input type="submit" name="edit" value="Edit" class="btn btn-info"></div></div></form></div></div></div></div></div>
			<?php include_once ('../footer.php'); ?>



	