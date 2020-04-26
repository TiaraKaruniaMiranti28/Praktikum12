<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "form_pendaftaran";
	$conn = mysqli_connect($servername, $username, "", $dbname);

	if (mysqli_connect_errno()){
		echo "Gagal Terhubung dengan database: ".mysqli_connect_error();
		exit();
	}
?>