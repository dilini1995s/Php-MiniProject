<?php
	session_start();
	require('connect.php');
	$id=$_SESSION['student_id'];
	echo " <link rel='stylesheet' href='css/bootstrap.min.css'>";
	
	mysqli_select_db($conn,'Result');
	$se="select * from student where student_id=$id ";
	$q=mysqli_query($conn,$se);
	
	$row=mysqli_fetch_assoc($q);
	
	echo "<div class='container  '>";
	echo "<h2>"."Profile Details"."</h2>";
	echo "</div>";
	echo "<div class='container  '>";
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
			echo "<td>"."<a href='display.php'>back</a>"."</td>";
			echo "<td>"."<a href='password.php'>change password</a>"."</td>";
		echo "</tr>";
		echo "</table>";
		
	echo "</div>";
	echo "</div>";	

?>
