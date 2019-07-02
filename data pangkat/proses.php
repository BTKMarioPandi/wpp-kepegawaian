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
$uuid 		        = Uuid::uuid4()->toString();
$nama 		        = trim(mysqli_real_escape_string($con, $_POST['nama_pegawai085']));
$nama_pangkat 		= trim(mysqli_real_escape_string($con, $_POST['nama_pangkat']));
$nama_golongan 		= trim(mysqli_real_escape_string($con, $_POST['nama_golongan']));
$no_sk 		        = trim(mysqli_real_escape_string($con, $_POST['no_sk']));
$tgl_sk 	        = trim(mysqli_real_escape_string($con, $_POST['tgl_sk']));
$tgl_mulai       	= trim(mysqli_real_escape_string($con, $_POST['tgl_mulai']));
$tgl_akhir      	= trim(mysqli_real_escape_string($con, $_POST['tgl_berakhir']));
$photo 		       = $nama_gambar;

if (isset($_POST['add'])) { mysqli_query($con, "INSERT INTO t_pangkat (id_pangkat,id_pegawai,id_m_pangkat,id_golongan,no_sk,tgl_sk,tgl_mulai,tgl_berakhir,file_sk) VALUES ('$uuid','$nama','$nama_pangkat','$nama_golongan','$no_sk','$tgl_sk','$tgl_mulai','$tgl_akhir','$photo')")or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	}else if (isset($_POST['edit'])) {
	if (empty($nama_gambar))
	{$id = $_POST['id'];
	mysqli_query($con, "UPDATE t_pangkat SET no_sk = '$no_sk',tgl_sk = '$tgl_sk', tgl_mulai = '$tgl_mulai', tgl_berakhir = '$tgl_akhir' WHERE id_pangkat='$id'") or die (mysqli_error($con));
		echo "<script>window.location='data.php';</script>";
		}
	elseif (!empty($nama_gambar)) 
		{$id = $_POST['id'];
		mysqli_query($con, "UPDATE t_pangkat043 SET no_sk = '$no_sk',tgl_sk = '$tgl_sk', tgl_mulai= '$tgl_mulai', tgl_berakhir = '$tgl_akhir' ,file_sk = '$photo' WHERE id_pangkat='$id'") or die (mysqli_error($con));
		echo "<script>window.location='data.php';</script>";
}
}
?>	