<?php include('config.php'); ?>

<center><strong><span style="font-size: 16px;">Create New Conference</span></strong></center>
<hr>
<?php
if (isset($_POST['submit'])) {
	if (empty($_POST['name']) || empty($_POST['desc']) || empty($_POST['schedule']) || empty($_POST['location'])) {
		echo "Please fillout all required fields";
	} else {
		$name  		= $_POST['name'];
		$desc 		= $_POST['desc'];
		$schedule   = $_POST['schedule'];
		$location   = $_POST['location'];
		$sql = "INSERT INTO users(name,desc,schedule,location)
            VALUES('$name', '$desc', '$schedule', '$location')";

		if ($koneksi->query($sql) === TRUE) {
			echo "<div class='alert alert-success'>Successfully added new data</div>";
		} else {
			echo "<div class='alert alert-danger'>Error: There was an error while adding new data</div>";
		}
	}
}
?>

<form style="font-size: 16px;" action="index.php?page=tambah_cfs" method="POST">
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Conference Name</label>
		<div class="col-md-6 col-sm-6 ">
			<input type="text" name="name" class="form-control" required>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
		<div class="col-md-6 col-sm-6">
			<textarea name="desc" class="form-control" required></textarea>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Conference Schedule</label>
		<div class="col-md-6 col-sm-6 ">
			<input type="date" name="schedule" class="form-control" required>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Conference Type</label>
		<div class="col-md-6 col-sm-6">
			<select name="tipe" class="form-control" required>
				<option value="">Pilih Jenis Rapat</option>
				<option value="Online">Online</option>
				<option value="Offline">Offline</option>
			</select>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Conference Link</label>
		<div class="col-md-6 col-sm-6 ">
			<input type="text" name="location" class="form-control" required>
		</div>
	</div>
	<div class="item form-group">
		<div class="col-md-6 col-sm-6 offset-md-3">
			<input type="submit" name="submit" class="btn btn-primary" value="SAVE">
			<input type="submit" name="submit" class="btn btn-outline-secondary" value="RESET">
		</div>
	</div>
</form>