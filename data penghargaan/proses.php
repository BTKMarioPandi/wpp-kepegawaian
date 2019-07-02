<?php 
require_once "../_config/config.php";
require_once "../_assets/libs/vendor/autoload.php";
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
//$nama_gambar 	= $_FILES['file_sk']['name'];
//$lokasi_gambar 	= $_FILES['file_sk']['tmp_name'];
//$tipe_gambar 	= $_FILES['file_sk']['type'];
//$imageFileType 	= strtolower(pathinfo($nama_gambar,PATHINFO_EXTENSION));
//move_uploaded_file($lokasi_gambar,"../_assets/img_jabatan/$nama_gambar");
$uuid 		        = Uuid::uuid4()->toString();
$nama 		        = trim(mysqli_real_escape_string($con, $_POST['nama_pegawai']));
$nm_penghargaan     = trim(mysqli_real_escape_string($con, $_POST['nama_penghargaan']));
$tahun 	            = trim(mysqli_real_escape_string($con, $_POST['tahun']));
$negara 		    = trim(mysqli_real_escape_string($con, $_POST['negara']));


if(isset($_POST['add'])){
	mysqli_query($con, "INSERT INTO t_penghargaan (id_penghargaan,id_pegawai,nama_penghargaan,tahun,negara )VALUES ('$uuid','$nama','$nm_penghargaan','$tahun','$negara')") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
}else if(isset($_POST['edit'])){
	if(empty($nama_gambar))
	{
	$id = $_POST['id'];
	mysqli_query($con, "UPDATE t_penghargaan SET nama_penghargaan='$nm_penghargaan',tahun='$tahun' ,negara='$negara' WHERE id_penghargaan='$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	}
	
}
?>
