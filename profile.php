<!DOCTYPE html>
<html>
<head>
	<title>profile page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		h1{
			color: red;
		}

		body
		{
			background-image: url(images/image.jpg);
			background-size: cover;
			background-position: center center;
			background-attachment: fixed;
		}
		#ui{
			background-color: #333;
			padding: 50px;
			margin: 50px;
			border-radius: 15px;
			opacity: 0.8;
		}
	</style>
</head>
<body>

</body>
</html>
<?php
	session_start();
	require('connect.php');
	$id=$_SESSION['student_id'];
	echo " <link rel='stylesheet' href='css/bootstrap.min.css'>";
	
	mysqli_select_db($conn,'result');
	$se="select * from student where student_id=$id ";
	$q=mysqli_query($conn,$se);
	
	$row=mysqli_fetch_assoc($q);
	
	echo "<div class='container  '>";
	echo "<div id = 'ui'>";
	echo "<h1><center>"."Profile Details"."</h1>";
	echo "</div>";
	echo "</div>";
	echo "<div class='container  '>";
	echo "<div id = 'ui'>";
		echo "<div class='row'>";
		
		echo "<table class='table table-striped table-hover'>";
		
		echo "<tr>";
			echo "<td>"."Name"."</td>";
			echo "<td>".":".$row['name']."</td>";
		echo "</tr>";
		
		echo "<tr>";
			echo "<td>"."Index Number"."</td>";
			echo "<td>".":".$row['username']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Email"."</td>";
			echo "<td>".":".$row['email']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."</td>";
			echo "<td>"."<a href='password.php'>change password</a>"."</td>";
		echo "</tr>";
		echo "</table>";
	echo "</div>";
	echo "</div>"
	
	

?>
