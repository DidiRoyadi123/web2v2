<?php
include 'header.html';
$id = $_GET['id_mahasiswa'];
include 'model.php';
$model = new model();
$data = $model->edit1($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Nilai Mahasiswa</title>
</head>

<body>
	
	<div class="container">
  	<div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit Nilai Mahasiswa</h1>
	<br><br>
	<form action="proses1.php" method="post">
		<label>id_mahasiswa</label>
		<br>
		<input class="form-control" type="text" name="id_mahasiswa" value="<?php echo $data->id_mahasiswa ?>">
		<br>
		<label>Nama</label>
		<br>
		<input class="form-control" type="text" name="nama" value="<?php echo $data->nama ?>">
		<br>
		<label>Semester</label>
		<br>
		<input class="form-control" type="number" name="semester" value="<?php echo $data->semester ?>">
		<br>
		<label>Alamat</label>
		<br>
		<input class="form-control" type="text" name="alamat" value="<?php echo $data->alamat ?>">
		<br>
		<label>No.Telpon</label>
		<br>
		<input class="form-control" type="number" name="no_telp" value="<?php echo $data->no_telp ?>">
        <br>
        <label>Email</label>
		<br>
		<input class="form-control" type="email" name="email" value="<?php echo $data->email ?>">
        <br><br>
        <a class="btn btn btn-info"  href="mahasiswa.php">Kembali</a> <button class="btn btn btn-success" type="submit" name="submit_editM">Submit</button> 
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
