<?php
include "conn.php";

$KodeBrg = $_GET['kode'];

$sql = "DELETE FROM tb_barang
		WHERE KodeBrg = '$KodeBrg'";

if($dbconn->query($sql) === TRUE){
	header("location:crud.php?pesan=hapus&kodebrg=".$KodeBrg);
} else {
	die("sql = ".$sql."<br>error=".$dbconn->error);
}

?>

<input type="button" class="btn btn-default" value="Kembali" onclick="window.location.href='crud.php'">