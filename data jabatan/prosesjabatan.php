<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";
use Ramsey\Uuid\Uuid;
use Ramse\Uui\Exception\UnsatisfiedDependencyException;

//$target_dir = "../_asset/img_pegawai/";
//$target_file = $target_dir . basename($_FILES["photo"]["name"]);
//$nama_gambar 	= $_FILES['file_sk043']['name'];
//$lokasi_gambar 	= $_FILES['file_sk043']['tmp_name'];
//$tipe_gambar 	= $_FILES['file_sk043']['type'];
//$imageFileType 	= strtolower(pathinfo($nama_gambar,PATHINFO_EXTENSION));

//move_uploaded_file($lokasi_gambar,"../_assets/img_pangkat/$nama_gambar");
	$uuid 			= Uuid::uuid4()->toString();
	$nama 			= trim(mysqli_real_escape_string($con, $_POST['nama_jabatan']));

if(isset($_POST['add'])){
	mysqli_query($con, "INSERT INTO t_master_jabatan095(id_m_jabatan095,nama_jabatan095)VALUES ('$uuid','$nama')") or die (mysqli_error($con));
echo "<script>window.location='add.php';</script>";
}else if(isset($_POST['edit'])){
	if(empty($nama_gambar))
	{
	$id = $_POST['id'];
	mysqli_query($con, "UPDATE t_jabatan095 SET no_sk095='$no',sk_mulai_jabatan095='$mulai',sk_berakhir095='$akhir' WHERE id_jabatan095='$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	}
	elseif (!empty($nama_gambar))
	{
	$id = $_POST['id'];
	mysqli_query($con, "UPDATE t_jabatan095 SET no_sk095='$no',sk_mulai_jabatan095='$mulai',sk_berakhir095='$akhir',file_sk095='$photo' WHERE id_jabatan095='$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	}
}
?>