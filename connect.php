<?php
		$servername="localhost";
		$username="root";
		$password="";

		$conn=mysqli_connect($servername,$username,$password);
		if(!$conn){
		die("connect failed: ".mysqli_connect_error());
		}
		
?>
