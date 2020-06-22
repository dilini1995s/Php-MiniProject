
<?php
	session_start();
	
	require('connect.php');
	mysqli_select_db($conn,'result');
$id=$_SESSION['id'];
		
		
	if(isset($_POST['submit'])){
		extract($_POST);
		
		$se="select * from result where student_id=$id and code='$code'";
		$qu=mysqli_query($conn,$se);
		
		$in1="insert into result values ('$id','$code','$grade')";
		if(mysqli_num_rows($qu)==0){
		if(!mysqli_query($conn,$in1)){
			die("cannot insert to result".mysqli_error());
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
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add result record to the database.</p>
						<form action="#" method="post">
							<div class="form-group">
									<label for="code">Subject code:</label>
										<input type="text" class="form-control"  placeholder="Enter Subject Code" name="code">
							</div>
							<div class="form-group">
									<label for="grade">Grade:</label>
										<input type="text" class="form-control"  placeholder="Enter Subject Name" name="grade">
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
