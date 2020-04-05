<html>
<?php
		include('passchange.php');
	?>
	<div ><p><?php if(isset($a)){ echo $a;}	?></p>
	<body>
	<link rel="stylesheet" href="css/bootstrap.min.css">
		<script type="text/javascript">
	function valid()
	{
		if(document.chngpwd.opwd.value=="")
		{
		alert("Old Password Filed is Empty !!");
		document.chngpwd.opwd.focus();
		return false;
		}
	else if(document.chngpwd.npwd.value=="")
		{
		alert("New Password Filed is Empty !!");
		document.chngpwd.npwd.focus();
		return false;
		}
	else if(document.chngpwd.cpwd.value=="")
	{
	alert("Confirm Password Filed is Empty !!");
	document.chngpwd.cpwd.focus();
	return false;
	}
	else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
	{
	alert("Password and Confirm Password Field do not match  !!");
	document.chngpwd.cpwd.focus();
	return false;
	}
	return true;
	}
	valid();
</script>

	</body>
	<div class='container  '>
		<h2>Change Password</h2>
	</div>	
	<p style="color:red;"></p>
	
	<form name="chngpwd" action="#" method="post" onSubmit="return valid();">
	<div class='container p-5 mb-2 col-md-4 bg-secondary '>
	<table >
	<tr height="50">
	<td>Old Password   :</td>
	<td><input type="password" name="opwd" id="opwd"></td>
	</tr>
	<tr height="50">
	<td>New Passowrd   :</td>
	<td><input type="password" name="npwd" id="npwd"></td>
	</tr>
	<tr height="50">
	<td>Confirm Password :</td>
	<td><input type="password" name="cpwd" id="cpwd"></td>
	</tr>
	<tr>
	<td><a href="display.php"><p class ="text-warning">Back to login Page</p></a></td>
	<td><input type="submit" class='bg-primary' name="Submit" value="Change Passowrd" /></td>
	</tr>
 </table>
 </div>
</form>

</html>