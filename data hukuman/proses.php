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
$j_hukuman      	= trim(mysqli_real_escape_string($con, $_POST['jenis_hukuman']));
$pengesahan_sk 	    = trim(mysqli_real_escape_string($con, $_POST['pengesahan_sk_hukuman']));
$no_pengesahan 		= trim(mysqli_real_escape_string($con, $_POST['no_pengesahan_sk']));
$tgl_pengesahan 	= trim(mysqli_real_escape_string($con, $_POST['tgl_pengesahan_sk']));
$pejabat_pemulih 	= trim(mysqli_real_escape_string($con, $_POST['pejabat_pemulih_hukuman']));
$no_pemulihan	        = trim(mysqli_real_escape_string($con, $_POST['no_pemulih']));
$tgl_pemulihan 	    = trim(mysqli_real_escape_string($con, $_POST['tgl_pemulih']));
	


if(isset($_POST['add'])){
	mysqli_query($con, "INSERT INTO t_hukum (id_hukuman,id_pegawai,jenis_hukuman,pengesahan_sk_hukuman,no_pengesahan_sk,tgl_pengesahan_sk,pejabat_pemulih_hukuman,no_pemulih,tgl_pemulih)VALUES ('$uuid','$nama','$j_hukuman','$pengesahan_sk','$no_pengesahan','$tgl_pengesahan','$pejabat_pemulih','$no_pemulihan','$tgl_pemulihan')") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
}else if(isset($_POST['edit'])){
	if(empty($nama_gambar))
	{
	$id = $_POST['id'];
	mysqli_query($con, "UPDATE t_hukum SET pengesahan_sk_hukuman='$pengesahan_sk',no_pengesahan_sk='$no_pengesahan' ,tgl_pengesahan_sk='$tgl_pengesahan'  ,pejabat_pemulih_hukuman='$pejabat_pemulih' ,no_pemulih='$no_pemulihan' ,tgl_pemulih='$tgl_pemulihan' WHERE id_hukuman='$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	}
	
}
?>
