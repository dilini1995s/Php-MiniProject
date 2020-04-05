<?php
	require('conn.php');
	mysqli_select_db($conn,'Result');

	$tab1="create table student(student_id int auto_increment,username varchar(40),password varchar(50),name varchar(60),sem_id int,primary key(student_id))";
	$tab2="create table sem(sem_id int,year int,semester int,primary key(sem_id))";
	$tab3="create table subject(sem_id int,name varchar(50),code varchar(40))";
	$tab4="create table result(student_id int,code varchar(40),Grade char(10),primary key(student_id,code))";
	if(mysqli_query($conn,$tab1)){
			echo "Table1 created successfully"."<br>";
		}
	if(mysqli_query($conn,$tab2)){

			echo "Table2 created successfully"."<br>";
		}
			}
	if(mysqli_query($conn,$tab3)){

			echo "Table3 created successfully"."<br>";
		}
	if(mysqli_query($conn,$tab4)){

			echo "Table3 created successfully"."<br>";
		}
	else{
    			die("cannot create".mysqli_error($conn));

		}		
	$in1="insert into sem values(11,1,1)";
	$in2="insert into sem values(12,1,2)";
	$in3="insert into sem values(21,2,1)";
	$in4="insert into sem values(22,2,2)";
	$in5="insert into sem values(31,3,1)";
	$in6="insert into sem values(32,3,2)";
	
	mysqli_query($conn,$in1);
	mysqli_query($conn,$in2);
	mysqli_query($conn,$in3);
	mysqli_query($conn,$in4);
	mysqli_query($conn,$in5);
	mysqli_query($conn,$in6);
	
	
	$t1="insert into subject values(11,'Programming Techniques','csc1113')";
	$t2="insert into subject values(11,'System Analyst & Design','csc1142')";
	$t3="insert into subject values(12,'Database Management Systems','csc1213')";
	$t4="insert into subject values(12,'software Engineering','csc1233')";
	$t5="insert into subject values(21,'Object Oriented Programming','csc2123')";
	$t6="insert into subject values(21,'Operating Systems','csc2133')";
	
	mysqli_query($conn,$t1);
	mysqli_query($conn,$t2);
	mysqli_query($conn,$t3);
	mysqli_query($conn,$t4);
	mysqli_query($conn,$t5);
	mysqli_query($conn,$t6);
	
	$r1="insert into result values(1,'csc1113','A')";
	$r2="insert into result values(1,'csc1142','B')";
	$r3="insert into result values(1,'csc1213','B')";
	$r4="insert into result values(1,'csc1233','A')";
	$r5="insert into result values(2,'csc1113','A')";
	$r6="insert into result values(2,'csc1142','B')";
	insert into result values(3,'csc1133','A');
	 insert into result values(3,'csc1142','A-');
	  insert into result values(3,'csc1213','B');
	   insert into result values(3,'csc1233','B');
	    insert into result values(3,'csc2123','B');
		insert into result values(3,'csc2133','C');
	
	mysqli_query($conn,$r1);
	mysqli_query($conn,$r2);
	mysqli_query($conn,$r3);
	mysqli_query($conn,$r4);
	mysqli_query($conn,$r5);
	mysqli_query($conn,$r6);
	
?>	