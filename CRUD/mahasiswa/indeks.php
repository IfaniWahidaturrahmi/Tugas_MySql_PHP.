<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Data Mahasiswa</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>No</td>
					<td>NIM</td>
					<td>Nama</td>
					<td>Prodi</td>
					<td>Aksi</td>
				</tr>
			</thead>

			<tbody>
				<?php 
				require '../koneksi.php';
				$no = 1;
				$query = "SELECT * FROM mahasiswa";

				$result = mysqli_query($link, $query);
				while ($isi = mysqli_fetch_object($result)) {
					# code...
				
				 ?>

				 <tr>
				 	<td><?= $no++; ?></td>
				 	<td><?= $isi->nim; ?></td>
				 	<td><?= $isi->nama_mahasiswa; ?></td>
				 	<td><?= $isi->prodi; ?></td>
				 	<td>
				 		<a href="" class="btn btn-danger">Delete</a>
						<a href="" class="btn btn-warning">Edit</a>	
				 	</td>
				 </tr>

				 <?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>