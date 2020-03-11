<?php
	session_start();
	require('connect.php');
	
	$id=$_SESSION['student_id'];
	echo "<a href='logout.php'>Sign Out</a>"."</br>";

	echo "<a href='profile.php'>Profile</a>"."</br>";
	
	mysqli_select_db($conn,'Result');
	$va1="select * from student where student_id='$id'";
	$in1=mysqli_query($conn,$va1);
	
	$row1=mysqli_fetch_assoc($in1);
	$sem=$row1['sem_id'];
	
	
	
	$va2="select * from sem where sem_id='$sem' ";
	$in2=mysqli_query($conn,$va2);
	$row2=mysqli_fetch_assoc($in2);
	$year=$row2['year'];
	$sem=$row2['semester'];
	
	
	
	
	
		if($sem==1 ){
			for($i=1;$i<$year;$i++){
				for($j=1;$j<=$sem+1;$j++){
					
						echo "Level-$i Semester".$j."</br>";
						
						
				echo "<table border=1 width='400px'>";
					echo "<tr>";
						echo "<td>"."Subject code"."</td>";
						echo "<td>"."Grade"."</td>";
		
					echo "</tr>";
					$se="select * from sem as s,result as r,student as st, subject as su where s.year=$i and s.semester=$j and st.student_id=r.student_id  and r.student_id=$id and s.sem_id=su.sem_id and su.code=r.code";
					$qu=mysqli_query($conn,$se);
		
					while($row3=mysqli_fetch_assoc($qu)){
							echo "<tr>";
								echo "<td>".$row3['code']."</td>";
								echo "<td>".$row3['Grade']."</td>";
							echo "</tr>";
						}
				echo "</table>";
					}
				}
		}
		else
		{
			for($i=1;$i<=$year;$i++){
				for($j=1;$j<$sem;$j++){
					
						echo "Level-$i Semester".$j."</br>";
						
						
				echo "<table border=1 width='400px'>";
					echo "<tr>";
						echo "<td>"."Subject code"."</td>";
						echo "<td>"."Grade"."</td>";
		
					echo "</tr>";
					$se="select * from sem as s,result as r,student as st, subject as su where s.year=$i and s.semester=$j and st.student_id=r.student_id  and r.student_id=$id and s.sem_id=su.sem_id and su.code=r.code";
					$qu=mysqli_query($conn,$se);
		
					while($row3=mysqli_fetch_assoc($qu)){
							echo "<tr>";
								echo "<td>".$row3['code']."</td>";
								echo "<td>".$row3['Grade']."</td>";
							echo "</tr>";
						}
				echo "</table>";
					}
				}
		}
	
	
?>