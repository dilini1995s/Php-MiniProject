<?php
	session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
	
	<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Result Details</h2>
                        <a href='subject.php' class='btn btn-success pull-right'>Add Subject</a>
						
						
                    
					</div>
					<a href='home.php' class='btn btn-success pull-right'>Back</a>
						
<?php
	require('connect.php');
	
		
		echo "<form method='post' action='#'>";	
		echo "<input type='text' name='user' placeholder='Search by student registration number' size='30'>";
		echo "  "."<input type='submit' name='submit'>";
		echo "</form>";

	if(!mysqli_select_db($conn,'result')){
		echo ("cannot");
	}
	
	if(isset($_POST['submit'])){
		extract($_POST);
		
		$se="select * from student where username='$user'";
		$r=mysqli_query($conn,$se);
		$row=mysqli_fetch_assoc($r);
		$id=$row['student_id'];
		$_SESSION['id']=$id;
		//echo $id;
		$d=$row['sem_id'];
		
		$sem="select * from sem where sem_id='$d'";
		$qu=mysqli_query($conn,$sem);
		$ro=mysqli_fetch_assoc($qu);
		echo "<h3>$user Student in Year ".$ro['year']." Semester ".$ro['semester']."</h3>";
		$se1="select * from result where student_id='$id'";
		$r1=mysqli_query($conn,$se1);
		echo "<table class='table table-bordered table-striped'>";
		echo "<tr class='  table-primary'>";
						echo "<td >"."Subject_code"."</td>";
						echo "<td >"."Grade"."</td>";
						echo "<td></td>";
						
					echo "</tr>";
		while($row1=mysqli_fetch_assoc($r1)){
		
				echo "<tr >";
								echo "<td>".$row1['code']."</td>";
								echo "<td>".$row1['Grade']."</td>";
								echo "<form action='#' method='post'>";
								echo "<td><input type='submit' name='delete' value='Delete'>";
								echo " "."<input type='submit' name='update' value='Update'></td>";
								$c=$row1['code'];
								$i=$row1['student_id'];
								$g=$row1['Grade'];
								$_SESSION['code']=$c;
								$_SESSION['grade']=$g;
								echo "<input type='hidden' value='$c' name='va1'>";
								echo "<input type='hidden' value='$i' name='va2'>";
								echo "</form>";
							echo "</tr>";
		
		}
		echo "</table>";
		
		echo "<a href='create.php' class='btn btn-success pull-right'>Add New result</a>";
		
echo "<div class='modal fade' id='modalLoginForm' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'
  aria-hidden='true'>";
	echo "<div class='modal-dialog'role='document'>";
		echo "<div class='modal-content'>";
			echo "<div class='modal-header text-center'>";
				echo "<h4 class='modal-title w-100 font-weight-bold'>Enter details</h4>";
             echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>";
			echo "</button>";
			echo "</div>";
		echo "<form action='#' method='post'>";	
      echo "<div class='modal-body mx-3'>";
        echo "<div class='md-form mb-5'>";
          echo "<i class='fas fa-envelope prefix grey-text'></i>";
          echo "<input type='text' name='year' id='defaultForm-email' class='form-control validate'>";
          echo "<label data-error='wrong' data-success='right' for='defaultForm-email'>Year</label>";
        echo "</div>";

        echo "<div class='md-form mb-4'>";
          echo "<i class='fas fa-lock prefix grey-text'></i>";
          echo "<input type='text' name='sem' id='defaultForm-pass' class='form-control validate'>";
          echo "<label data-error='wrong' data-success='right' for='defaultForm-pass'>Semester</label>";
        echo "</div>";

      echo "</div>";
      echo "<div class='modal-footer d-flex justify-content-center'>";
        echo "<button type='submit' name='sub' class='btn btn-default'>Submit</button>";
      echo "</div>";
	  echo "</form>";
    echo "</div>";
  echo "</div>";
echo "</div>";

echo "<div class=text-center>";
  echo "<a href='' class='btn btn-default btn-rounded mb-4' data-toggle='modal' data-target='#modalLoginForm'>If student in new semester or year enter details</a>";
echo "</div>";
		
	}
	
		if(isset($_POST['delete'])){
			extract($_POST);
			
			$de="delete from result where student_id=$va2 and code='$va1'";
			$c=mysqli_query($conn,$de);
			
			if($c){
				header('Location:admin.php');
				
			}
			else
				die('error in delete'.mysqli_error());
		}
		if(isset($_POST['update'])){
			extract($_POST);
			
				header('Location:update.php');
			
		}
	
		if(isset($_POST['sub'])){
			extract($_POST);
			$se="Select * from sem where year='$year' and semester='$sem'";
		$qu=mysqli_query($conn,$se);
		$ro=mysqli_fetch_assoc($qu);
		$sem_id=$ro['sem_id'];
		$i=$_SESSION['id'];
			$up="update student set sem_id='$sem_id' where student_id=$i ";
		if(!mysqli_query($conn,$up)){
			die("cannot update to ".mysqli_error());
			}
		}
	?>
	</div>
	</div>
	</div>
	</div>