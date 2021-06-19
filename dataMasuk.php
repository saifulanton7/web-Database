<?php	include 'config.php';
	date_default_timezone_set('Asia/Jakarta');
	if (isset($_GET['solid']) && isset($_GET['volume'])) {
		# code...
		$dataSolid = $_GET['solid'];
		$dataVolume = $_GET['volume'];
		$nama = "Tabung Gas";
		$tanggal = date('d F Y');
		$waktu = date('H:i:s');

		// //Ambil Data Solids
		// $querySolid = mysqli_query($con, "SELECT nama as n FROM data_mahasiswa, data_masuk WHERE data_mahasiswa.uid = '$uidKartu'");
		// $dataFixNama = mysqli_fetch_array($queryNama);
		// $fixNama = $dataFixNama['n'];

		// //Ambil Kelas
		// $queryKelas = mysqli_query($con, "SELECT kelas as k FROM data_mahasiswa, data_masuk WHERE data_mahasiswa.uid = '$uidKartu'");
		// $dataFixKelas = mysqli_fetch_array($queryKelas);
		// $fixKelas = $dataFixKelas['k'];

		// //Ambil NIM
		// $queryNim= mysqli_query($con, "SELECT nim as o FROM data_mahasiswa, data_masuk WHERE data_mahasiswa.uid = '$uidKartu'");
		// $dataFixNim = mysqli_fetch_array($queryNim);
		// $fixNim = $dataFixNim['o'];

		// //Baca Id
		// $queryId = mysqli_query($con, "SELECT uid as i FROM data_mahasiswa WHERE data_mahasiswa.uid = '$uidKartu'");
		// $dataFixId = mysqli_fetch_array($queryId);
		// $fixId = $dataFixId['i'];
		// echo "ID = ";
		// echo $fixId;

		// if ($fixId == NULL){
		// 	echo "INVALID";
		// 	mysqli_query($con, "INSERT INTO data_invalid (tanggal, waktu, uid) VALUES ('$tanggal','$waktu', '$uidKartu')");
		// } else {
		// 	echo "SUCCESS";
		// 	mysqli_query($con, "INSERT INTO data_absen ( uid, tanggal, waktu, nama, kelas, nim) VALUES ('$uidKartu', '$tanggal','$waktu', '$fixNama', '$fixKelas', '$fixNim')");
			
		// }

		mysqli_query($con, "INSERT INTO data_warehouse (NAME, SOLIDS, VOLUME, DATE, TIME) VALUES ('$nama', '$dataSolid', '$dataVolume', '$tanggal', '$waktu')");
	}
?>