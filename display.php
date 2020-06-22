<?php
	session_start();
	require('connect.php');
	echo " <link rel='stylesheet' href='css/bootstrap.min.css'>";
	$id=$_SESSION['student_id'];
	
	echo "<div class='container '>";
	echo "<h2>"."Examination Results"."</h2>";
	echo "</div>";
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
	
	if($year==1 && $sem==1)
		$va=0;
	if($year==1 && $sem==2)
		$va=1;
	if($year==2 && $sem==1)
		$va=2;
	if($year==2 && $sem==2)
		$va=3;
	if($year==3 && $sem==1)
		$va=4;
	if($year==3 && $sem==2)
		$va=5;
	$cal=0;
	$c=0;
	$n=0;
	for($i=1;$i<=$va;$i++){
			
			
		switch($i){
			
			case 1:$se="select * from sem as s,result as r,student as st, subject as su where s.year=1 and s.semester=1 and st.student_id=r.student_id  and r.student_id=$id and s.sem_id=su.sem_id and su.code=r.code";
					echo "<div class='container text-success '>";echo "Level-1 Semester-1"."</br>";echo "</div>";
					break;
			case 2:$se="select * from sem as s,result as r,student as st, subject as su where s.year=1 and s.semester=2 and st.student_id=r.student_id  and r.student_id=$id and s.sem_id=su.sem_id and su.code=r.code";
					echo "<div class='container  text-success'>";echo "Level-1 Semester-2"."</br>";echo "</div>";
					break;
					
			case 3:$se="select * from sem as s,result as r,student as st, subject as su where s.year=2 and s.semester=1 and st.student_id=r.student_id  and r.student_id=$id and s.sem_id=su.sem_id and su.code=r.code";
					echo "<div class='container text-success   '>";echo "Level-2 Semester-1"."</br>";echo "</div>";
					break;
			case 4:$se="select * from sem as s,result as r,student as st, subject as su where s.year=2 and s.semester=2 and st.student_id=r.student_id  and r.student_id=$id and s.sem_id=su.sem_id and su.code=r.code";
					echo "<div class='container text-success '>";echo "Level-2 Semester-2"."</br>";echo "</div>";
					break;
			case 5:$se="select * from sem as s,result as r,student as st, subject as su where s.year=3 and s.semester=1 and st.student_id=r.student_id  and r.student_id=$id and s.sem_id=su.sem_id and su.code=r.code";
					echo "<div class='container  text-success'>";echo "Level-3 Semester-1"."</br>";echo "</div>";
					break;
			case 6:$se="select * from sem as s,result as r,student as st, subject as su where s.year=3 and s.semester=2 and st.student_id=r.student_id  and r.student_id=$id and s.sem_id=su.sem_id and su.code=r.code";
					echo "<div class='container text-success '>";echo "Level-3 Semester-2"."</br>";echo "</div>";
					break;
		}
		echo "<div class='container  '>";
		echo "<div class='row'>";
		echo "<table border=1 width='200px' class=' col-lg-6 table table-sm table-bordered  table-striped table-hover  table-fixed'>";
					echo "<tr class='  table-primary'>";
						echo "<td >"."Subject code"."</td>";
						echo "<td >"."Subject Name"."</td>";
						echo "<td >"."Grade"."</td>";
		
					echo "</tr>";
		$qu=mysqli_query($conn,$se);
		
					while($row3=mysqli_fetch_assoc($qu)){
							echo "<tr >";
								echo "<td>".$row3['code']."</td>";
								echo "<td>".$row3['name']."</td>";
								echo "<td>".$row3['Grade']."</td>";
							echo "</tr>";
							$g1=$row3['Grade'];
							$g2=$row3['credit'];
							$c=$c+$g2;
							
							$ge=check($g1);
							$n=$n+($g2*$ge);
							$cal=($n)/$c;
						}
				echo "</table>";
		echo "</div>";
			echo "</div>";	
	}
	
	
	
		echo "<div class='container text-secondary '>";
		echo "</br>"."Current GPA: ".round($cal,4)."</br>";
		echo "</div>";
		$ch="";
		function check($ch){
		switch($ch){
			
				case 'A':
							$ne=4;
							return $ne;
							break;
				case 'A-':	$ne=3.7;
							return $ne;
							break;
				case 'B+':	$ne=3.3;
							return $ne;
							break;
								
				case 'B':	$ne=3;
							return $ne;
							break;
				case 'B-':	$ne=2.7;
							return $ne;
							break;
				case 'C+':	$ne=2.3;
							return $ne;
							break;
								
				case 'C':	$ne=2;
							return $ne;
							break;
				case 'C-':	$ne=1.7;
							return $ne;
							break;
				case 'D+':	$ne=1.3;
							return $ne;
							break;
				case 'D':	$ne=1;
							return $ne;
							break;
				case 'D-':	$ne=0.7;
							return $ne;
							break;
				default:	$ne=0;
							return $ne;
							break;				
		}											
			}
		echo "<br>";	
			echo "<div class='container  '>";	
		echo "<div class=' row text-info  '>";	
		
		
		echo "<div class='col-sm-4'>";
		echo "<a href='profile.php'>Profile</a></div>";
		echo "<div class='col-sm-4'>";
		echo "<a href='logout.php'>Logout</a>"."</br>";
		echo "</div>";	
		echo "</div>";	
		echo "</div >";
		
		echo "</div >";
?>