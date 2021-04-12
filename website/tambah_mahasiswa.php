<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Mahasiswa</title>
</head>

<body>

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Tambah Data Mahasiswa</h1>
	<a class="btn btn-sm btn-info" href="mahasiswa.php">Kembali</a>
	<br><br>
	<form action="proses1.php" method="post">
        <label>id_mahasiswa</label>
		<br>
		<input class="form-control" type="number" name="id_mahasiswa">
		<label>Nama</label>
		<br>
		<input class="form-control" type="text" name="nama">
		<br>
		<label>Semester</label>
		<br>
		<input class="form-control" type="number" name="semester"><br>
		<label>Alamat</label>
		<br>
		<input class="form-control" type="text" name="alamat">
		<br>
		<label>No_telp</label>
		<br>
		<input class="form-control" type="number" name="no_telp">
		<br>
		<label>Email</label>
		<br>
		<input class="form-control" type="email" name="email">
		<br>
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-success" type="submit" name="submit_simpanM">Submit</button>
		
	</form>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="images/home/hero.png" class="img-fluid" alt="">
    </div>
  </div>
</div>

	
</body>
<?php
include 'footer.html';
?>
</html>