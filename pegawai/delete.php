<?php
require_once "../_config/config.php";
$id = $_POST['thapus'];
mysqli_query($con, "DELETE FROM t_pegawai095 WHERE id_pegawai095 = '$id'") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
?>