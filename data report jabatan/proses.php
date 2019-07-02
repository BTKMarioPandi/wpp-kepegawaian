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
	mysqli_query($con, "INSERT INTO t_jabatan(id_jabatan,id_pegawai,id_m_jabatan,no_sk,sk_mulai_jabatan,sk_berakhir,file_sk)VALUES ('$uuid','$nama','$jabatan','$no','$mulai','$akhir','$photo')") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
}else if(isset($_POST['edit'])){
	if(empty($nama_gambar))
	{
	$id = $_POST['id'];
	mysqli_query($con, "UPDATE t_jabatan SET no_sk='$no',sk_mulai_jabatan='$mulai',sk_berakhir='$akhir' WHERE id_jabatan='$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	}
	elseif (!empty($nama_gambar))
	{
	$id = $_POST['id'];
	mysqli_query($con, "UPDATE t_jabatan SET no_sk='$no',sk_mulai_jabatan='$mulai',sk_berakhir='$akhir',file_sk='$photo' WHERE id_jabatan='$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	}
}
?>