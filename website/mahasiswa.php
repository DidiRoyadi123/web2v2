<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	
</head>

<body align="center">
	
	<div class="tabel">
		<h1>Data Mahasiswa</h1>		
		<a class="btn btn-sm btn-success" href="tambah_mahasiswa.php">Tambah Data</a> <a class="btn btn-sm btn-info" href="print_mahasiswa.php" target="_blank">Cetak Data</a>
		<br><br>
		<table align="center" width="800px" border="1">
			<thead>
				<tr >
					<th>id</th>
					<th>Nama</th>
					<th>Semester</th>
					<th>Alamat</th>
					<th>No.tlp</th>
					<th>Email</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$result = $model->tampil_mahasiswa();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr>
							<td><?=$data->id_mahasiswa ?></td>
							<td><?=$data->nama ?></td>
							<td><?=$data->semester ?></td>
							<td><?=$data->alamat ?></td>
							<td><?=$data->no_telp ?></td>
							<td><?=$data->email ?></td>
							<td>
								<a name="edit1" id="edit1" class="btn btn-sm btn-warning" href="edit1.php?id_mahasiswa=<?=$data->id_mahasiswa ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="proses1.php?nama=<?=$data->nama ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="9">Belum ada data pada tabel mahasiswa.</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
<?php
include 'footer.html';
?>
</html>