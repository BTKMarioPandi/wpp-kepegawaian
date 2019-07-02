<?php 
require_once "../_config/config.php";
require_once "../_assets/libs/vendor/autoload.php";
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
$nama_gambar 	= $_FILES['sertifikat']['name'];
$lokasi_gambar 	= $_FILES['sertifikat']['tmp_name'];
$tipe_gambar 	= $_FILES['sertifikat']['type'];
$imageFileType 	= strtolower(pathinfo($nama_gambar,PATHINFO_EXTENSION));
move_uploaded_file($lokasi_gambar,"../_assets/img_dik/$nama_gambar");
	$uuid 		= Uuid::uuid4()->toString();

	$nama 		       = trim(mysqli_real_escape_string($con, $_POST['nama_pegawai']));
	$nm_diklat 	       = trim(mysqli_real_escape_string($con, $_POST['nama_diklat']));
	$jmlh_jam 	       = trim(mysqli_real_escape_string($con, $_POST['jumlah_jam']));
	$selenggara 	   = trim(mysqli_real_escape_string($con, $_POST['penyelenggara']));
	$tmpt 	           = trim(mysqli_real_escape_string($con, $_POST['tempat']));
	$angktan 	       = trim(mysqli_real_escape_string($con, $_POST['angkatan']));
	$tahun 	           = trim(mysqli_real_escape_string($con, $_POST['tahun']));
	$nomor_sttpp 	   = trim(mysqli_real_escape_string($con, $_POST['no_sttpp']));
	$tgl_sttpp	       = trim(mysqli_real_escape_string($con, $_POST['tanggal_sttpp']));
	$photo 	   =  $nama_gambar;

if(isset($_POST['add'])){
	mysqli_query($con, "INSERT INTO t_diklat (id_diklat,id_pegawai,nama_diklat,jumlah_jam,penyelenggara,tempat,angkatan,tahun,no_sttpp,tanggal_sttpp,sertifikat)VALUES ('$uuid','$nama','$nm_diklat','$jmlh_jam','$selenggara','$tmpt','$angktan','$tahun','$nomor_sttpp','$tgl_sttpp','$photo')") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
}else if(isset($_POST['edit'])){
	if(empty($nama_gambar))
	{
	$id = $_POST['id'];
	mysqli_query($con, "UPDATE t_diklat SET nama_diklat='$nm_diklat',jumlah_jam='$jmlh_jam',penyelenggara='$selenggara' ,tempat='$tmpt' ,angkatan='$angktan' ,tahun='$tahun' ,no_sttpp='$nomor_sttpp' ,tanggal_sttpp='$tgl_sttpp' ,tanggal_sttpp='$tgl_sttpp'  WHERE id_diklat='$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	}
	elseif (!empty($nama_gambar))
	{
	$id = $_POST['id'];
	mysqli_query($con, "UPDATE t_diklat SET nama_diklat='$nm_diklat',jumlah_jam='$jmlh_jam',penyelenggara='$selenggara' ,tempat='$tmpt' ,angkatan='$angktan' ,tahun='$tahun' ,no_sttpp='$nomor_sttpp' ,tanggal_sttpp='$tgl_sttpp' ,tanggal_sttpp='$tgl_sttpp' ,sertifikat='$photo' WHERE id_diklat='$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	}
}
?>