<?php
require_once "../_config/config.php";
require_once "../_assets/libs/vendor/autoload.php";
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

//$target_dir = "../_asset/img_pegawai/";
//$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$nama_gambar = $_FILES['photo095']['name'];
$lokasi_gambar = $_FILES['photo095']['tmp_name'];
$tipe_gambar = $_FILES['photo095']['type'];
$imageFileType = strtolower(pathinfo($nama_gambar,PATHINFO_EXTENSION));

move_uploaded_file($lokasi_gambar,"../_assets/img_pegawai/$nama_gambar");
	$uuid = Uuid::uuid4()->toString();
	$nik = trim(mysqli_real_escape_string($con, $_POST['nik095']));
	$nama_pegawai = trim(mysqli_real_escape_string($con, $_POST['nama_pegawai095']));
	$tempat_lahir = trim(mysqli_real_escape_string($con, $_POST['tempat_lahir095']));
	$tgl_lahir = trim(mysqli_real_escape_string($con, $_POST['tgl_lahir095']));
	$jenis_kelamin = trim(mysqli_real_escape_string($con, $_POST['jenis_kelamin095']));
	$status = trim(mysqli_real_escape_string($con, $_POST['status095']));
	$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat095']));
	$no_telepon = trim(mysqli_real_escape_string($con, $_POST['no_telepon095']));
	$photo = $nama_gambar;

if(isset($_POST['add'])){
	mysqli_query($con, "INSERT INTO t_pegawai095(id_pegawai095,nik095,nama_pegawai095,tempat_lahir095,tgl_lahir095,jenis_kelamin095,status095,alamat095,no_telepon095,photo095)VALUES ('$uuid','$nik','$nama_pegawai','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$status','$alamat','$no_telepon','$photo')") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
}else if(isset($_POST['edit'])){
	if(empty($nama_gambar))
	{
	$id_pegawai = $_POST['id_pegawai095'];
	mysqli_query($con, "UPDATE t_pegawai095 SET nik095='$nik',nama_pegawai095='$nama_pegawai',tempat_lahir095='$tempat_lahir',tgl_lahir095='$tgl_lahir',jenis_kelamin095='$jenis_kelamin',status095='$status',alamat095='$alamat',no_telepon095='$no_telepon' WHERE id_pegawai095='$id_pegawai'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	}
	elseif (!empty($nama_gambar))
	{
	$id_pegawai = $_POST['id_pegawai095'];
	mysqli_query($con, "UPDATE t_pegawai095 SET nik095='$nik',nama_pegawai095='$nama_pegawai',tempat_lahir095='$tempat_lahir',tgl_lahir095='$tgl_lahir',jenis_kelamin095='$jenis_kelamin',status095='$status',alamat095='$alamat',no_telepon095='$no_telepon',photo095='$photo' WHERE id_pegawai095='$id_pegawai'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	}
}
?>