<?php
include 'header.html';
$id = $_GET['id_absen'];
include 'model_absen.php';
$model_absen = new Model_absen();
$data = $model_absen->edit_absen($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Absensi Mahasiswa</title>
</head>

<body>
	
	<div class="container">
  	<div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit absen Mahasiswa</h1>
	<br><br>
	<form action="proses2.php" method="post">
		<label>ID Absen</label>
		<br>
		<input class="form-control" type="text" name="id_absen" value="<?php echo $data->id_absen ?>">
		<br>
		<label>ID Mahasiswa</label>
		<br>
		<input class="form-control" type="text" name="id_mahasiswa" value="<?php echo $data->id_mahasiswa ?>">
		<br>
		<label>ID Mata Kuliah</label>
		<br>
		<input class="form-control" type="text" name="id_matkul" value="<?php echo $data->id_matkul ?>">
		<br>
		<label>Waktu Absen</label>
		<br>
		<input class="form-control" type="text" name="waktu_absen" value="<?php echo $data->waktu_absen ?>">
		<br><br>
		<a class="btn btn btn-info"  href="absen.php">Kembali</a> <button class="btn btn btn-success" type="submit" name="submit_edit">Submit</button> 
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
