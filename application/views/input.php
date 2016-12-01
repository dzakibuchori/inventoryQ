<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Belajar CRUD :: Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">

</head>
<body>
<div class="container">
	<div id="content">	
		<h1 id="databaru">Input Data Baru</h1>
		<form class ="form-horizontal" method="POST" action="input-aksi.php">
			<div class="form-group">
				<label class="control-labell col-sm-2" for="KodeBrg">Kode Barang*</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="KodeBrg" id="KodeBrg" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="control-labell col-sm-2" for="NamaBrg">Nama Barang</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="NamaBrg" id="NamaBrg" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="control-labell col-sm-2" for="Jenis">Jenis</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="Jenis" id="Jenis">
				</div>
			</div>
			<div class="form-group">
				<label class="control-labell col-sm-2" for="Jumlah">Jumlah</label>
				<div class="col-sm-4">
					<input type="number" class="form-control" name="Jumlah" id="Jumlah">
				</div>
			</div>
			<div class="form-group">
				<label class="control-labell col-sm-2" for="Harga">Harga</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="Harga" id="Harga">
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
		</form>
	</div>
</div>
</body>
</html>