<?php
include 'header.html';
include 'model_absen.php';
$model_absen = new model_absen();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	
</head>

<body align="center">
	
	<div class="tabel">
		<h1>Data absen Mahasiswa</h1>		
		<a class="btn btn-sm btn-success" href="tambah_absen.php">Tambah Data</a> <a class="btn btn-sm btn-info" href="print_absen.php" target="_blank">Cetak Data</a>
		<br><br>
		<table align="center" width="800px" border="1">
			<thead align="center">
				<tr>
					<th>No.</th>
					<th>ID Absen</th>
					<th>ID Mahasiswa</th>
					<th>ID Matkul</th>
					<th>Waktu Absen</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$result = $model_absen->tampil_absen();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr>
							<td><?=$index++ ?></td>
							<td><?=$data->id_absen ?></td>
							<td><?=$data->id_mahasiswa ?></td>
							<td><?=$data->id_matkul ?></td>
							<td><?=$data->waktu_absen ?></td>
							<td><?=$data->status ?></td>
							
							<td>
								<a name="edit" id="edit" class="btn btn-sm btn-warning" href="edit_absen.php?id_absen=<?=$data->id_absen ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="proses2.php?id_absen=<?=$data->id_absen ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="9">Belum ada data pada tabel absensi mahasiswa.</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</body>
<?php
include 'footer.html';
?>
</html>