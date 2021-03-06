<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data</title>
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
	<h1>Laporan Data Nilai Mahasiswa</h1>
	<table>
		<thead>
			<tr>
            <th>id</th>
                    <th>No.</th>
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
						<td><?=$index++ ?></td>
						<td><?=$data->id_mahasiswa ?></td>
							<td><?=$data->nama ?></td>
							<td><?=$data->semester ?></td>
							<td><?=$data->alamat ?></td>
							<td><?=$data->no_telp ?></td>
							<td><?=$data->email ?></td>
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