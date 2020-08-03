<?php
	session_start();
	require('connect.php');
	
	
	
	mysqli_select_db($conn,"result");
	
	if(isset($_POST['login'])){
		
		extract($_POST);
		$a="";
		$se="select * from Student where username='$name' and password=md5('$password')";

		$s=mysqli_query($conn,$se);
		$check=mysqli_fetch_assoc($s);
		$id=$check['student_id'];
		
				
				if(!$check){
					$a="Enter valid username/password";
				}
				
				else{
					$_SESSION['student_id']=$id;
					header('location:display.php');
					
				}
				

	}
	
?>
