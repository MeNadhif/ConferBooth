<center><strong><span style="font-size: 30px;">Add New Notulensi</span></strong></center>
<hr>
<form style="font-size: 16px;" action="index.php?page=tambah_cfs" method="POST">
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Conference Name</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="name" name="name" class="form-control" placeholder="Input Name" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Notulensi</label>
        <div class="col-md-6 col-sm-6">
            <textarea rows="4" id="desc" name="desc" class="form-control" placeholder="Add Notulensi" required></textarea>
        </div>
    </div>
    <div class="item form-group">
        <label style="margin-right: 10px;" class="col-form-label col-md-3 col-sm-3 label-align">Input Document</label>
        <input style="width: 520px" type="file" name="upload" class="btn btn-secondary" value="Choose File">
    </div>
    <div class="item form-group">
        <label style="margin-right: 10px;" class="col-form-label col-md-3 col-sm-3 label-align">Download Template</label>
        <a href="kambing.jpg" download>
            <button style="width: 520px" type="submit" class="btn btn-success">Download Template</button>
        </a>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <input type="submit" name="addnew" class="btn btn-primary" value="SAVE">
            <input type="reset" name="reset" class="btn btn-outline-secondary" value="RESET">
        </div>
    </div>
</form>