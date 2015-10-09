<?php

$connect=mysqli_connect("localhost","vc",'query',"res");
$query="select * from course_master";
$result=mysqli_query($connect,$query);
?>

<link rel="shortcut icon" href="img/NITAlogo.ico" />
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/main.css" rel="stylesheet">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>


<div class="navbar navbar-static-top navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">RES</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<li><a href="../login.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="browse.php" target="mainframe">Floated Courses</a></li>
            <li><a href="addcourse.php" target="mainframe">Create New Course</a></li>
            <li><a href="#">Inactive courses</a></li>
          </ul>
        </li>          
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Department <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="departments.php" target="mainframe">Existing Departments</a></li>
            <li><a href="adddepartment.php" target="mainframe">Create New Department</a></li>
          </ul>
        </li>         
        <li ><a href="#">settings<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<iframe src="browse.php" name="mainframe" class="frame">

</iframe>