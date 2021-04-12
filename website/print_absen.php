<?php
include 'model_absen.php';
$model_absen = new model_absen();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data Absen</title>
	<style>
		h1 {
			text-align: center;
		}
		table, 
		td, 
		th {
			border: 1px solid #ddd;
			text-align: left;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, 
		td {
			padding: 15px;
		}
	</style>
</head>

<body>
	<h1>Laporan Data Absen Mahasiswa</h1>
	<table>
		<thead>
			<tr>
            <th>No.</th>
			<th>ID Absen</th>
			<th>ID Mahasiswa</th>
			<th>ID Matkul</th>
			<th>Waktu Absen</th>
			<th>Status</th>
					
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
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel nilai mahasiswa.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
		window.print();
	</script>
</body>

</html>