<?php
require_once "../_config/config.php";
require_once "../_assets/libs/vendor/autoload.php";
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

//$target_dir = "../_asset/img_pegawai/";
//$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$nama_gambar = $_FILES['photo085']['name'];
$lokasi_gambar = $_FILES['photo085']['tmp_name'];
$tipe_gambar = $_FILES['photo085']['type'];
$imageFileType = strtolower(pathinfo($nama_gambar,PATHINFO_EXTENSION));

move_uploaded_file($lokasi_gambar,"../_assets/img_pegawai/$nama_gambar");
	$uuid = Uuid::uuid4()->toString();
	$nik = trim(mysqli_real_escape_string($con, $_POST['nik085']));
	$nama_pegawai = trim(mysqli_real_escape_string($con, $_POST['nama_pegawai085']));
	$tempat_lahir = trim(mysqli_real_escape_string($con, $_POST['tempat_lahir085']));
	$tgl_lahir = trim(mysqli_real_escape_string($con, $_POST['tgl_lahir085']));
	$jenis_kelamin = trim(mysqli_real_escape_string($con, $_POST['jenis_kelamin085']));
	$status = trim(mysqli_real_escape_string($con, $_POST['status085']));
	$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat085']));
	$no_telepon = trim(mysqli_real_escape_string($con, $_POST['no_telepon085']));
	$photo = $nama_gambar;

if(isset($_POST['add'])){
	mysqli_query($con, "INSERT INTO t_pegawai085(id_pegawai085,nik085,nama_pegawai085,tempat_lahir085,tgl_lahir085,jenis_kelamin085,status085,alamat085,no_telepon085,photo085)VALUES ('$uuid','$nik','$nama_pegawai','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$status','$alamat','$no_telepon','$photo')") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
}else if(isset($_POST['edit'])){
	if(empty($nama_gambar))
	{
	$id_pegawai = $_POST['id_pegawai085'];
	mysqli_query($con, "UPDATE t_pegawai085 SET nik085='$nik',nama_pegawai085='$nama_pegawai',tempat_lahir085='$tempat_lahir',tgl_lahir085='$tgl_lahir',jenis_kelamin085='$jenis_kelamin',status085='$status',alamat085='$alamat',no_telepon085='$no_telepon' WHERE id_pegawai085='$id_pegawai'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	}
	elseif (!empty($nama_gambar))
	{
	$id_pegawai = $_POST['id_pegawai085'];
	mysqli_query($con, "UPDATE t_pegawai085 SET nik085='$nik',nama_pegawai085='$nama_pegawai',tempat_lahir085='$tempat_lahir',tgl_lahir085='$tgl_lahir',jenis_kelamin085='$jenis_kelamin',status085='$status',alamat085='$alamat',no_telepon085='$no_telepon',photo085='$photo' WHERE id_pegawai085='$id_pegawai'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	}
}
?>