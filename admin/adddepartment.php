<?php

$connect=mysqli_connect("localhost","vc",'query',"res");
if(isset($_POST['title'])){
	$query="insert into dept_master (dept_name) values ('".$_POST['title']."')";
	$result=mysqli_query($connect,$query);
	if(!$result)
		echo "error".mysqli_error($connect);
	else
		echo"<div>Department Successfully Created</div>";
}
?>
<link rel="shortcut icon" href="img/NITAlogo.ico" />
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/main.css" rel="stylesheet">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<form class="form-horizontal addform" action="adddepartment.php" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Department Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Course Title" name="title">
    </div>
  </div>
  <div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label"></label>
  <div class="col-sm-10">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>
</form>