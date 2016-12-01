<?php

include "conn.php";

$KodeBrg = $_POST['KodeBrg'];
$NamaBrg = $_POST['NamaBrg'];
$Jumlah = $_POST['Jumlah'];
$Harga = $_POST['Harga'];
$Jenis = $_POST['Jenis'];

$sql = "UPDATE tb_barang 
		SET NamaBrg='$NamaBrg', Jumlah='$Jumlah', Harga='$Harga', Jenis='$Jenis'
		WHERE KodeBrg='$KodeBrg'";

if($dbconn->query($sql) === TRUE) {
	header("location:crud.php?pesan=update&kodebrg=".$KodeBrg);
} else {
	header("location:crud.php?pesan=error&sql=".$sql."&error=".$dbconn->error);
}

?>