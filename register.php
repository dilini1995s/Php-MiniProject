<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration sysytem PHP and MySQL</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		body
		{
			background-image: url(images/s4.jpg);
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

		#ui label,h1{
			color: #fff;
		}

		a{
			color: red;
		}

		
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				
				<div id = "ui">
					<h1><center>Registation From</center></h1>
					<br>
					<br>
					<form class="from-group" method = "POST" action="#" >
						<?php include('errors.php');?>

						<div class="from-group">
							<div class="col-lg-6">
								 <label>Username</label>
							</div>
							<div class="col-lg-6">
								 <input type="text" name="uname" value= "" class="from-control" placeholder="Enter Index Number">
							</div>
						</div>
						<br>
						<br>
						<br>
						<div class="from-group">
							<div class="col-lg-6">
								 <label>Fullname</label>
							</div>
							<div class="col-lg-6">
								 <input type="text" name="fname" value= "" class="from-control" placeholder="Enter Fullname">
							</div>
						</div>
						<br>
						<br>
						<br>
						<div class="from-group">
							<div class="col-lg-6">
								 <label>Email</label>
							</div>
							<div class="col-lg-6">
								 <input type="text" name="email" value= "" class="from-control" placeholder="Enter Email">
							</div>
						</div>
						<br>
						<br>
						<br>
						<div class="from-group">
							<div class="col-lg-6">
								 <label>Password</label>
							</div>
							<div class="col-lg-6">
								 <input type="text" name="pword" value= "" class="from-control" placeholder="Enter Password">
							</div>
						</div>
						<br>
						<br>
						<br>
						<div class="from-group">
							<div class="col-lg-6">
								 <label>Confirm Password</label>
							</div>
							<div class="col-lg-6">
								 <input type="text" name="cpword" value= "" class="from-control" placeholder="Confirm Password">
							</div>
						</div>
						<br>
						<br>
						<br>
						<div class="from-group">
							<div class="col-lg-6">
								 <label>SemID</label>
							</div>
							<div class="col-lg-6">
								 <input type="text" name="sem" value= "" class="from-control" placeholder="Enter Sem Id">
							</div>
						</div>
						<br>
						<br>
						<br>
						<div class="from-group">
							<div class="col-lg-6">
								 <input type="submit" name="submit" value="submit">
							</div>
							<div class="col-lg-6">
								 <input type="reset" name="reset">
							</div>
						</div>

						<br>
						<br>
						<br>
						<a href="login.php"><h4>SignIn</h4></a>
					</form>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
	
</body>
</html>