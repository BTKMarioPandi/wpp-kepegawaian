<?php
require_once "../_config/config.php";
$id = @$_GET['id'];
mysqli_query($con, "DELETE FROM t_pangkat WHERE id_pangkat = '$id'") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
?>