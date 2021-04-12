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
		<h1>Data Mata Kuliah</h1>		
		<a class="btn btn-sm btn-success" href="tambah_mk.php">Tambah Data</a> <a class="btn btn-sm btn-info" href="print_mk.php" target="_blank">Cetak Data</a>
		<br><br>
		<table align="center" width="800px" border="1">
			<thead>
				<tr >
					<th>ID Mata kuliah</th>
					<th>Nama Mata kuliah</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$result = $model->tampil_mk();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr>
							<td><?=$data->id_mk ?></td>
							<td><?=$data->nama_mk ?></td>
							<td>
								<a name="edit_mk" id="edit_mk" class="btn btn-sm btn-warning" 
                href="edit_mk.php?id_mk=<?=$data->id_mk ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" 
                href="proses_mk.php?id_mk=<?=$data->id_mk ?>">Delete</a>
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