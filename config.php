<?php
	// koneksi database

	$con = mysqli_connect("localhost", "root", "", "db_warehouse");

	if (!$con) {
		echo 'Error : '.mysqli_connect_error($con);
	}

?>