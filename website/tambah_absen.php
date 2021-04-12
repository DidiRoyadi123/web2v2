<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Nilai</title>
</head>

<body>

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Tambah</h1>
	<a class="btn btn-sm btn-info" href="absen.php">Kembali</a>
	<br><br>
	<form action="proses2.php" method="post">
		<label>ID Absen</label>
		<br>
		<input class="form-control" type="number" name="id_absen">
		<br>
		<label>ID Mahasiswa</label>
		<br>
		<input class="form-control" type="number" name="id_mahasiswa"><br>
		<label>ID Matkul</label>
		<br>
		<input class="form-control" type="number" name="id_matkul">
		<br>
		<label>Waktu Absen</label>
        <br>
        <input class="form-control" type="number" name="waktu_absen">
        <br>
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-success" type="submit" name="submit_absen">Submit</button>
		
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