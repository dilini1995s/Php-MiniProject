<?php
		$servername="localhost";
		$username="root";
		$password="root";

		$conn=mysqli_connect($servername,$username,$password);
		if(!$conn){
		die("connect failed: ".mysqli_connect_error());
		}
		
?>
