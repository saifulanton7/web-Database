<?php
	// koneksi database

	$ con = mysqli_connect ( "localhost" , "root" , "" , "dbta" );

	jika (! $ kon ) {
		echo  'Kesalahan:' . mysqli_connect_error ( $ con );
	}

?>