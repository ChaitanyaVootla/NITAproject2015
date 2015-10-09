<?php

$connect=mysqli_connect("localhost","vc",'query',"res");
$query_dept="select * from dept_master";
$result_dept=mysqli_query($connect,$query_dept);
$query_setter="select * from user_master";
$result_setter=mysqli_query($connect,$query_setter);
if(isset($_POST['title'])){
	$dept=$_POST['department'];
	$query="insert into course_master (course_title,course_dept,course_setter,course_sem,course_startdate,course_expenroll,course_accesscode,course_status) values ('".$_POST['title']."',".$dept.",
	".$_POST['setter'].",
	".$_POST['semester'].",
	'".$_POST['sd']."',
	".$_POST['enroll'].",
	'".$_POST['code']."',
	1
	)";
	$result=mysqli_query($connect,$query);
	if(!$result)
		echo "error".mysqli_error($connect);
	else
		echo"<div>Course Successfully Created</div>";
}
?>
<link rel="shortcut icon" href="img/NITAlogo.ico" />
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/main.css" rel="stylesheet">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<form class="form-horizontal addform" action="addcourse.php" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Course Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" placeholder="Course Title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Department</label>
    <div class="col-sm-10">
	<select class="form-control" name="department">
	<?php
			while($row=mysqli_fetch_assoc($result_dept)){
				echo '<option value="'.$row['dept_id'].'">'.$row['dept_name'].'</option>';
			}
	  ?>
	</select>
      
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Setter</label>
    <div class="col-sm-10">
      <select class="form-control" name="setter">
	<?php
			while($row=mysqli_fetch_assoc($result_setter)){
				echo '<option value="'.$row['user_id'].'">'.$row['user_email'].'</option>';
			}
	  ?>
	</select>
      
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Semester</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="semester" placeholder="Semester">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Start Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputPassword3" name="sd" placeholder="Start Date">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Expected Enroll no</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" name="enroll" placeholder="Expected Enroll no">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Access Code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="code" placeholder="Access Code">
    </div>
  </div>
  <div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label"></label>
  <div class="col-sm-10">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>
</form>