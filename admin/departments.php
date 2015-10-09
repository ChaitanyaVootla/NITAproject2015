<?php

$connect=mysqli_connect("localhost","vc",'query',"res");
$query="select * from dept_master";
$result=mysqli_query($connect,$query);
?>
<link rel="shortcut icon" href="img/NITAlogo.ico" />
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/main.css" rel="stylesheet">
<link href="../js/jquery.min.js" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<table class="table table-bordered table-striped">
		<thead>
			<tr>
        <th>department</th>
        <th>enroll id</th>
        <th>Action</th>
      </tr>
		</thead>
		<?php
			while($row=mysqli_fetch_assoc($result)){
				echo '<tr>
				<td>'.$row['dept_name'].'</td>
				<td>'.$row['dept_id'].'</td>
				<td><a href="">edit</a> <a href="">delete</a></td>
			  </tr>';
			}
		?>
	</table>