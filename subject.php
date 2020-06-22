
<?php
	session_start();
	
	require('connect.php');
	mysqli_select_db($conn,'result');

	if(isset($_POST['submit'])){
		extract($_POST);
		
		$se="Select * from sem where year='$year' and semester='$sem'";
		$qu=mysqli_query($conn,$se);
		$ro=mysqli_fetch_assoc($qu);
		$sem_id=$ro['sem_id'];
		//echo "$sem_id";
		$se1="Select * from subject where name='$name'";
		$qu1=mysqli_query($conn,$se1);
		
		if(mysqli_num_rows($qu1)==0){
		$in2="insert into subject values ('$sem_id','$name','$code','$credit')";
			if(!mysqli_query($conn,$in2)){
				die("cannot insert to subject".mysqli_error());
			}
			else
				header('Location:admin.php');
		}
		else
			header('Location:admin.php');
	}
	
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Subject</h2>
                    </div>
                    <p>Please fill this form and submit to add subject record to the database.</p>
						<form action="#" method="post">
							<div class="form-group">
									<label for="code">Subject code:</label>
										<input type="text" class="form-control"  placeholder="Enter Subject Code" name="code">
							</div>
							<div class="form-group">
									<label for="name">Subject Name:</label>
										<input type="text" class="form-control"  placeholder="Enter Subject Name" name="name">
							</div>
							
							<div class="form-group">
									<label for="year">Year:</label>
										<input type="text" class="form-control"  placeholder="Enter Subject Code" name="year">
							</div>
							<div class="form-group">
									<label for="sem">Semester:</label>
										<input type="text" class="form-control"  placeholder="Enter Semester" name="sem">
							</div>
							<div class="form-group">
									<label for="credit">Credit:</label>
										<input type="text" class="form-control"  placeholder="Enter credit" name="credit">
							</div>
									<button type="submit" class="btn btn-default"><a href='admin.php'>Close</a></button>
									<button type="submit" name='submit' class="btn btn-default">Submit</button>
									
								
						</form>
					
					
				</div>
			</div>
		</div>
	</div>		
	</body>
</html>	
