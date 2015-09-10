<?php

$connect=mysqli_connect("localhost","vc",'query',"res");
?>
<link rel="shortcut icon" href="img/NITAlogo.ico" />
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/main.css" rel="stylesheet">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<form class="form-horizontal addform">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Course Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Course Title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Department</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Department">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Setter</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Setter">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Semester</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Semester">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Start Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputPassword3" placeholder="Start Date">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Expected Enroll no</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" placeholder="Expected Enroll no">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Access Code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Access Code">
    </div>
  </div>
  <div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label"></label>
  <div class="col-sm-10">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>
</form>