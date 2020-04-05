<?php
session_start();
include("connect.php");
	mysqli_select_db($conn,'Result');
	if(isset($_POST['Submit']))
	{
		extract($_POST);
	$oldpass=md5($_POST['opwd']);
	
	$newpassword=md5($_POST['npwd']);
	$id=$_SESSION['student_id'];
	$sql=mysqli_query($conn,"SELECT password FROM student where password='$oldpass' && student_id=$id ");
	$num=mysqli_fetch_assoc($sql);
	
	
if($num)
{
$d=mysqli_query($conn,"update student set password='$newpassword' where student_id=$id");

 $a="Password Changed Successfully !!";
	
}
else
{
$a="Old Password not match !!";
}
}
?>