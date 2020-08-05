<?php
	session_start();

	$username = "";
	$email = "";
	$errors = array();

	$db = mysqli_connect('localhost', 'root','root','result');

	

	if(isset($_POST['submit']))
	{
		$uname = mysqli_real_escape_string($db ,$_POST['uname']);
		if(empty($uname)){
			array_push($errors,"Username is required");
		}
		$fname = mysqli_real_escape_string($db ,$_POST['fname']);
		if(empty($fname)){
			array_push($errors,"Field is required");
		}
		$email = mysqli_real_escape_string($db ,$_POST['email']);

		if(empty($email)){
			array_push($errors,"Email is required");
		}
		$pword = mysqli_real_escape_string($db ,$_POST['pword']);
		if(empty($pword)){
			array_push($errors,"Password is required");
		}
		$cpword = mysqli_real_escape_string($db ,$_POST['cpword']);
		if(empty($cpword)){
			array_push($errors,"The two password not match");
		}
		
		$sem = mysqli_real_escape_string($db ,$_POST['sem']);
		if(empty($sem)){
			array_push($errors,"Address is required");
		}

	
		
		
		
		
		
		/*$user_check_query = "SELECT * FROM member WHERE Email='$email' LIMIT 1";
 		 $result = mysqli_query($db, $user_check_query);
  		$user = mysqli_fetch_assoc($result);
		
		if($user)
		{
			if($user['email'] === $email)
			{
				array_push($errors, "Email already exists");
			}

			if($user['pword'] === $uname)
			{
				array_push($errors, "Username already exists");
			}

			if($user['uname'] === $uname)
			{
				array_push($errors, "Username already exists");
			}
		}*/

		if(count($errors) == 0)
		{
			$psword = md5($pword);

			$query = "INSERT INTO student(username,password,name,sem_id,email) values('$uname','$psword','$fname','$sem','$email')";


			mysqli_query($db, $query);
		}
	}