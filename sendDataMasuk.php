<?php 	include  'config.php' ;
	date_default_timezone_set ( 'Asia/Jakarta' );
	if ( isset ( $ _GET [ 'masuk' ]) {
		#kode...
		$ masuk  = $ _GET ['masuk'];
		$ waktu= tanggal ( 'd-F-Y H:i:s' );


		mysqli_query ( $ con , "INSERT INTO masuk (Masuk) VALUES('$waktu')" );
	}
?>