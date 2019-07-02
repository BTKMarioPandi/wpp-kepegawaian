<?php 
require_once "../_config/config.php";
require_once "../_assets/libs/vendor/autoload.php";
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
$nama_gambar = $_FILES['file_ijazah095']['name'];
$lokasi_gambar = $_FILES['file_ijazah095']['tmp_name'];
$tipe_gambar = $_FILES['file_ijazah095']['type'];
$imageFileType = strtolower(pathinfo($nama_gambar,PATHINFO_EXTENSION));
move_uploaded_file($lokasi_gambar,"../_assets/img_pendidikan/$nama_gambar");
$uuid = Uuid::uuid4()->toString();
$nama = trim(mysqli_real_escape_string($con, $_POST['nama_pegawai095']));
$tingkat = trim(mysqli_real_escape_string($con, $_POST['tingkat095']));
$nama_pt = trim(mysqli_real_escape_string($con, $_POST['nama_pt095']));
$lokasi = trim(mysqli_real_escape_string($con, $_POST['lokasi095']));
$jurusan = trim(mysqli_real_escape_string($con, $_POST['jurusan095']));
$noijazah = trim(mysqli_real_escape_string($con, $_POST['no_ijazah095']));
$tglijazah = trim(mysqli_real_escape_string($con, $_POST['tgl_ijazah095']));
$photo = $nama_gambar;

if (isset($_POST['add'])) {
						mysqli_query($con, "INSERT INTO t_pendidikan095 (id_pendidikan095,id_pegawai095,tingkat095,nama_pt095,lokasi095,jurusan095,no_ijazah095,tgl_ijazah095,file_ijazah095) VALUES 
							('$uuid','$nama','$tingkat','$nama_pt','$lokasi','$jurusan','$noijazah','$tglijazah','$photo')")or die (mysqli_error($con));
						echo "<script>window.location='data.php';</script>";

					}else if (isset($_POST['edit'])) {
							if (empty($nama_gambar))
							{
								$id = $_POST['id'];
								mysqli_query($con, "UPDATE t_pendidikan095 SET tingkat095 = '$tingkat', nama_pt095 = '$nama_pt',lokasi095 = '$lokasi',jurusan095 = '$jurusan', no_ijazah095 = '$noijazah', tgl_ijazah095 = '$tglijazah'  WHERE id_pendidikan095 = '$id' ") or die (mysqli_error($con));
								echo "<script>window.location='data.php';</script>";
							}
								elseif (!empty($nama_gambar)) 
						{
								$id = $_POST['id'];
								mysqli_query($con, "UPDATE t_pendidikan095 SET tingkat095 = '$tingkat095', nama_pt095 = '$nama_pt095',lokasi095 = '$lokasi095',jurusan095 = '$jurusan095', no_ijazah095 = '$noijazah095', tgl_ijazah095 = '$tglijazah095' ,file_ijazah095 = '$photo095' WHERE id_pendidikan095 ='$id' ") or die (mysqli_error($con));
								echo "<script>window.location='data.php';</script>";
}
}
?>	