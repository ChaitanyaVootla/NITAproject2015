<?php

$connect=mysqli_connect("localhost","vc",'query',"res");

?>
<?php
	$checkc=1;
	if(isset($_POST['mail'])){				
		$query="select * from user_master where user_email="."'".$_POST['mail']."' limit 1";
		$preresult = mysqli_query($connect,$query);
		if(!$preresult){
				die("database query failed".mysqli_connect_error());
		}
		$row=mysqli_fetch_assoc($preresult);
		if($_POST['pass']==$row['user_pass']){
			setcookie( "userlogin", "{$_POST['mail']}", time()+60*60*24 );
			function Redirect($url, $permanent = false)
		{
			header('Location: ' . $url, true, $permanent ? 301 : 302);

			exit();
		}
		$checkc=1;
		Redirect('admin/courses.php', false);
		}
		else{
			$checkc=0;
		}
		
	}
?>
<link rel="shortcut icon" href="img/NITAlogo.ico" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="js/jquery.min.js" >
<link href="js/bootstrap.min.js" >


<div class="navbar navbar-static-top navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">RES</a>
		  
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	<div class="container">

      <form class="form-signin" action="login.php" method="post" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Log In</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="mail" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
		<?php
			if($checkc==0)
				echo "<div class=\"lerror\">Login Error</div><br>";
		?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		Not registered? <a href="register.php">  register here</a>
      </form>

    </div> <!-- /container -->
	