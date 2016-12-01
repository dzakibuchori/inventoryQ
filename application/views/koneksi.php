<?php
//	error_reporting(0);
	$server="localhost";
	$id="root";
	$pass="";
	$db="db_crud";

	$conn = new mysqli($server, $id, $pass);
	if(mysqli_connect_error()){
		die("koneksi error : ".mysqli_connect_error());
	} else {
		echo "koneksi berhasil<br/>";
	}

	function createDb($dbname){
		global $conn;
		$sql = "CREATE DATABASE $dbname";

		if($conn->query($sql)==TRUE){
			echo "Database dengan nama:\"$dbname\" Berhasil Dibuat !";
		} else {
			echo "Gagal Membuat Database !".$conn->error;
		}

		$conn->close();
	}
?>
