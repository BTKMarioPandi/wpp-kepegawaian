<?php 
require_once "../_config/config.php";
require_once "../_assets/libs/vendor/autoload.php";
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
$nama_gambar 	= $_FILES['file_sk']['name'];
$lokasi_gambar 	= $_FILES['file_sk']['tmp_name'];
$tipe_gambar 	= $_FILES['file_sk']['type'];
$imageFileType 	= strtolower(pathinfo($nama_gambar,PATHINFO_EXTENSION));
move_uploaded_file($lokasi_gambar,"../_assets/img_jabatan/$nama_gambar");
	$uuid 		= Uuid::uuid4()->toString();

	$nama 		= trim(mysqli_real_escape_string($con, $_POST['nama_pegawai']));
	$jabatan 	= trim(mysqli_real_escape_string($con, $_POST['nama_jabatan']));
	$no 	    = trim(mysqli_real_escape_string($con, $_POST['no_sk']));
	$mulai 		= trim(mysqli_real_escape_string($con, $_POST['sk_mulai_jabatan']));
	$akhir 	    = trim(mysqli_real_escape_string($con, $_POST['sk_berakhir']));
	$photo 	    = $nama_gambar;

if(isset($_POST['add'])){
	mysqli_query($con, "INSERT INTO t_jabatan095(id_jabatan095,id_pegawai095,id_m_jabatan095,no_sk095,sk_mulai_jabatan095,sk_berakhir095,file_sk095)VALUES ('$uuid','$nama','$jabatan','$no','$mulai','$akhir','$photo')") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
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