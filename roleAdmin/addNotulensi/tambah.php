<?php include('config.php'); ?>

<center><strong><span style="font-size: 30px;">Create New Conference</span></strong></center>
<hr>
<?php
if (isset($_POST['addnew'])) {
	if (empty($_POST['name']) || empty($_POST['desk']) || empty($_POST['schedule']) || empty($_POST['location'])) {
		echo "Please fillout all required fields";
	} else {
		$name  		= $_POST['name'];
		$desk 		= $_POST['desk'];
		$schedule   = $_POST['schedule'];
		$location   = $_POST['location'];
		$sql = "INSERT INTO confer(name, desk, schedule, location) VALUES('$name', '$desk', '$schedule', '$location')";

		if ($koneksi->query($sql) === TRUE) {
			echo "<div class='alert alert-success'>Successfully created a new conference</div>";
		} else {
			echo "<div class='alert alert-danger'>Error: There was an error while creating a new conference</div>";
		}
	}
}
?>

<div class="nav nav-pills">
	<button class="tablinks" onclick="tambahCon(event, 'Create')">Create</button>
	<button class="tablinks" onclick="tambahCon(event, 'Tokyo')">Tokyo</button>
</div>

<div id="Create" class="tabcontent">
	<form style="font-size: 16px;" action="index.php?page=tambah_cfs" method="POST">
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Judul Rapat</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" id="name" name="name" class="form-control" placeholder="Masukkan Judul" required>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Deskripsi</label>
			<div class="col-md-6 col-sm-6">
				<textarea rows="4" id="desk" name="desk" class="form-control" placeholder="Tuliskan Deskripsi" required></textarea>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Jadwal Rapat</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="date" id="schedule" name="schedule" class="form-control" required>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Tipe Rapat</label>
			<div class="col-md-6 col-sm-6">
				<select name="tipe" class="form-control" required>
					<option value="">Pilih Jenis Rapat</option>
					<option value="Online">Online</option>
					<option value="Offline">Offline</option>
				</select>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Tautan Rapat</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" id="location" name="location" class="form-control" placeholder="Masukkan Tautan" required>
			</div>
		</div>
		<div class="item form-group">
			<div class="col-md-6 col-sm-6 offset-md-3">
				<input type="submit" name="addnew" class="btn btn-primary" value="Simpan">
				<input type="reset" name="reset" class="btn btn-outline-secondary" value="Batalkan">
			</div>
		</div>
	</form>
</div>

<div id="Tokyo" class="tabcontent">
	<h3>Tokyo</h3>
	<p>Tokyo is the capital of Japan.</p>
</div>


<script>
	function tambahCon(evt, tambahC) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(tambahC).style.display = "block";
		evt.currentTarget.className += " active";
	}
</script>