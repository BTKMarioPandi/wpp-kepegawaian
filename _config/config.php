<?php
//date_default_timezone_get('Asia/Jakarta');
$con = mysqli_connect('localhost','root','','kepegawaian095');
if (mysqli_connect_errno()){
	echo mysqli_connect_error();
}

function base_url($url = null){
	$base_url = "http://localhost/imam_hazwa";
	if ($url != null){
		return $base_url. "/" .$url;
	}else{
		return $base_url;
	}
}

?>
