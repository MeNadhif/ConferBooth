<?php include('config.php'); ?>


<div class="container" style="margin-top:20px">
	<center><strong><span style="font-size: 30px;">Edit Data</span></strong></center>

	<hr>

	<?php
	//jika sudah mendapatkan parameter GET id dari URL
	if (isset($_GET['id'])) {
		//membuat variabel $id untuk menyimpan id dari GET id di URL
		$id = $_GET['id'];

		//query ke database SELECT tabel mahasiswa berdasarkan id = $id
		$select = mysqli_query($koneksi, "SELECT * FROM confer WHERE id='$id'") or die(mysqli_error($koneksi));

		//jika hasil query = 0 maka muncul pesan error
		if (mysqli_num_rows($select) == 0) {
			echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
			exit();
			//jika hasil query > 0
		} else {
			//membuat variabel $data dan menyimpan data row dari query
			$data = mysqli_fetch_assoc($select);
		}
	}
	?>

	<?php
	//jika tombol simpan di tekan/klik
	if (isset($_POST['submit'])) {
		$nama			= $_POST['nama'];
		$desk			= $_POST['desk'];
		$Program_Studi	= $_POST['Program_Studi'];

		$sql = mysqli_query($koneksi, "UPDATE confer SET nama='$nama', desk='$desk', Program_Studi='$Program_Studi' WHERE id='$id'") or die(mysqli_error($koneksi));

		if ($sql) {
			echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_mhs";</script>';
		} else {
			echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
		}
	}
	?>

	<form style="font-size: 16px;" action="index.php?page=edit_mhs&id=<?php echo $id; ?>" method="post">
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Conference Name</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" id="name" name="name" class="form-control" value="<?php echo $data['name']; ?>" required>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
			<div class="col-md-6 col-sm-6">
				<textarea rows="4" id="desk" name="desk" class="form-control" value="<?php echo $data['desk']; ?>" required></textarea>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Conference Schedule</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="date" id="schedule" name="schedule" class="form-control" value="<?php echo $data['schedule']; ?>" required>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Conference Link</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" id="location" name="location" class="form-control" value="<?php echo $data['location']; ?>" required>
			</div>
		</div>
		<div class="item form-group">
			<div class="col-md-6 col-sm-6 offset-md-3">
				<input type="submit" name="submit" class="btn btn-primary" value="SAVE">
				<a href="index.php?page=tampil_mhs" class="btn btn-warning">Kembali</a>
			</div>
		</div>
	</form>
</div>