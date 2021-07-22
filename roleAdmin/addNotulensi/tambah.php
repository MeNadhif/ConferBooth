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

<form style="font-size: 16px;" action="index.php?page=tambah_cfs" method="POST">
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Conference Name</label>
		<div class="col-md-6 col-sm-6 ">
			<input type="text" id="name" name="name" class="form-control" placeholder="Input Name" required>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
		<div class="col-md-6 col-sm-6">
			<textarea rows="4" id="desk" name="desk" class="form-control" placeholder="Add Description" required></textarea>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Conference Schedule</label>
		<div class="col-md-6 col-sm-6 ">
			<input type="date" id="schedule" name="schedule" class="form-control" required>
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
			<input type="text" id="location" name="location" class="form-control" placeholder="Input Link" required>
		</div>
	</div>
	<div class="item form-group">
		<div class="col-md-6 col-sm-6 offset-md-3">
			<input type="submit" name="addnew" class="btn btn-primary" value="SAVE">
			<input type="reset" name="reset" class="btn btn-outline-secondary" value="RESET">
		</div>
	</div>
</form>