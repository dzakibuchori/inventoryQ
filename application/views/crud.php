<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Belajar CRUD</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">

</head>
<body>
<div class="container">
	<div id="content">	
		<?php echo base_url()."assets/css/bootstrap.min.css"; ?>
		<h1>Data Barang</h1>

		<!-- Notifikasi CRUD -->
		<?php
		/*if(isset($_GET['pesan'])){
			$pesan = $_GET['pesan'];
			switch ($pesan) {
				case 'input': ?>
					<div class="alert alert-success alert-dismissable" role="alert">
					<a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
						<strong>Sukses!</strong> Data Berhasil di Input.
					</div> <?php
					break;

				case 'update': 
					$KodeBrg = $_GET['kodebrg']; ?>
					<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
						<strong>Sukses!</strong> Data dengan Kode Barang : <strong><?php echo $KodeBrg; ?></strong> Berhasil di Update.
					</div> <?php
					break;

				case 'hapus': 
					$KodeBrg = $_GET['kodebrg']; ?>
					<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
						<strong>Sukses!</strong> Data dengan Kode Barang : <strong><?php echo $KodeBrg; ?></strong> Berhasil dihapus.
					</div> <?php
					break;

				default: 
					$sql = $_GET['sql'];
					$error = $_GET['error'];?>
					<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
						<strong>Maaf!</strong> Proses Gagal!. 
						<strong>Sql Syntax : </strong> <?php echo $sql; ?>
						<strong>Error ! : </strong> <?php echo $error; ?>
					</div> <?php
					break;
			}
		}*/
		?>

		<table width="900px" class="tbdata table table-hover">
			<tr class="center">
				<th width="5%">No</th>
				<th width="20%">Kode Barang</th>
				<th width="20%">Nama Barang</th>
				<th width="10%">Jenis</th>
				<th widht="10%">Jumlah</th>
				<th width="15%">Harga</th>
				<th width="20%">Aksi</th>
			</tr>
					<?php
						$no = 1;
						foreach ($TbBrg as $row){
							echo '
						<tr>
							<td>'.$no++.'</td>
							<td>'.$row["KodeBrg"].'</td>
							<td>'.$row["NamaBrg"].'</td>
							<td>'.$row["Jenis"].'</td>
							<td>'.$row["Jumlah"].'</td>
							<td>'.$row["Harga"].'</td>' ?>
							<td class="center">
								<a class="aksi mine" href="edit.php?kode=<?php echo $row['KodeBrg']; ?>">Edit</a> | 
								<a class="delete mine" href="hapus.php?kode=<?php echo $row['KodeBrg']; ?>">Delete</a> 
							</td> 
						</tr> <?php
						}
					?>
					
		</table>
		<a href="<?php echo base_url(); ?>index.php/c_input/" class="tambah mine">Input Data Baru</a>

	</div>
</div>

<!-- External Source JQuery & BS JavaScript -->
<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>