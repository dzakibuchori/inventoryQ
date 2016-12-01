<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Belajar CRUD :: Edit Data Data</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<div class="container">
	<div id="content">	
		<h1 id="edit">Edit Data</h1>

		<?php
		
		include "conn.php";
		$kode = $_GET['kode'];

		$sql = "SELECT * FROM tb_barang WHERE KodeBrg='$kode'";
		$result = $dbconn->query($sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){ ?>
		<form class ="form-horizontal" method="POST" action="update.php">
			<div class="form-group">
				<label class="control-labell col-sm-2" for="KodeBrg">Kode Barang*</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="KodeBrg" id="KodeBrg" required="required" value="<?php echo $row['KodeBrg']; ?>" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-labell col-sm-2" for="NamaBrg">Nama Barang</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="NamaBrg" id="NamaBrg" required="required" value="<?php echo $row['NamaBrg']; ?>" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-labell col-sm-2" for="Jenis">Jenis</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="Jenis" id="Jenis" value="<?php echo $row['Jenis']; ?>" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-labell col-sm-2" for="Jumlah">Jumlah</label>
				<div class="col-sm-4">
					<input type="number" class="form-control" name="Jumlah" id="Jumlah" value="<?php echo $row['Jumlah']; ?>" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-labell col-sm-2" for="Harga">Harga</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="Harga" id="Harga" value="<?php echo $row['Harga']; ?>" >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-4">
					<input type="submit" class="btn btn-success" value="Simpan">
					<input type="reset" class="btn btn-warning" value="Reset">
					<input type="button" class="btn btn-default" value="Batal" onclick="window.location.href='crud.php'">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-4">
					<label><a class="btn btn-default btn-xs" href="crud.php">lihat detail</a></label>
				</div>
			</div>

		<?php	}


		}

		?>

		</form>
	</div>
</div>
</body>
</html>