<?php
require_once "../_config/config.php";
$id=@$_GET ['id'];
mysqli_query ($con, "DELETE FROM t_pendidikan095 WHERE id_pendidikan095 ='$id'") or die(mysqli_error($con));
echo "<script>window.location='data.php';</script>";
  ?>