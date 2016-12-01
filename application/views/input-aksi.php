<?php
include "conn.php";

$KodeBrg = $_POST['KodeBrg'];
$NamaBrg = $_POST['NamaBrg'];
$Jumlah = $_POST['Jumlah'];
$Harga = $_POST['Harga'];
$Jenis = $_POST['Jenis'];

$sql = "INSERT INTO tb_barang (KodeBrg, NamaBrg, Jumlah, Harga, Jenis) 
		VALUES ('$KodeBrg', '$NamaBrg', $Jumlah, $Harga, '$Jenis')";

if ($dbconn->query($sql) === TRUE) {
	header("location:crud.php?pesan=input");
} else {
	header("location:crud.php?pesan=error&sql=".$sql."&error=".$dbconn->error);
}

$dbconn->close();
?>