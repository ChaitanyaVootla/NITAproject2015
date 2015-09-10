<?php

$connect=mysqli_connect("localhost","vc",'query',"res");

$query="select * from dept_master";
?>

<link rel="shortcut icon" href="img/NITAlogo.ico" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<form class="form form-horizontal">
    <h1>Registration</h1>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Full Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Full Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Department</label>
    <div class="col-sm-8">
      <select class="form-control" name="department">
		  <?php
			while($row=mysqli_fetch_assoc($result)){
				echo '<option value="'.$row['dept_name'].'">'.$row['dept_name'].'</option>';
			}
		?>
	  </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Contact number</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="inputPassword3" placeholder="Contact number">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Gender</label>
    <div class="col-sm-8">
      <select class="form-control" name="department">
		<option value="male">Male</option>
		<option value="male">Female</option>
	  </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Address">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Date of Birth</label>
    <div class="col-sm-8">
      <input type="date" class="form-control" id="inputPassword3" placeholder="Date of Birth">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">occupation</label>
    <div class="col-sm-8">
      <select class="form-control" name="department">
		<option value="male">Student</option>
		<option value="male">Faculty</option>
		<option value="male">NA</option>
	  </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Roll number</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Roll number">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Type of registration</label>
    <div class="col-sm-8">
      <select class="form-control" name="department">
		<option value="male">User</option>
		<option value="male">Admin</option>
	  </select>
    </div>
  </div>
  <div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label"></label>
  <div class="col-sm-8">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>
</form>