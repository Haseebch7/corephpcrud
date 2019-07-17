<?php
  include("include/dbconnection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title> User Form </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>

</head>
<body style="background: skyblue;">
<section>
	<div class="container w-50">
		<h2 class="text-center text-primary pt-5"> User SignUp Form</h2>
		<form method="post" action="" class="pt-5">
			<div class="form-group">
			   <input type="text" name="TxtName" value="" placeholder="user name" class="form-control" required="">
			</div>
			<div class="form-group">
			   <input type="email" name="TxtEmail" value="" placeholder="Email Address" class="form-control" required="">
			</div>
			<div class="form-group">
			   <input type="password" name="TxtPassword" value="" placeholder="password" class="form-control" required="">
			</div>
			<div class="form-group">
			   <input type="text" name="TxtPhone" value="" placeholder="Phone No" class="form-control" required="">
			</div>
			<input type="submit" name="BtnSignup" value="Signup" class="btn btn-primary">
		</form>
	</div>
</section>

</body>
</html>



<?php
if (isset($_POST['BtnSignup'])) 
{
	$username = $_POST['TxtName'];
	$email = $_POST['TxtEmail'];
	$password = $_POST['TxtName'];
	$phone = $_POST['TxtPhone'];

	$Query = "INSERT INTO user(id, username, email, password, phone)
	VALUES(Null, '$username', '$email', '$password', '$phone' )";

	$Query_run = mysqli_query($constr, $Query);

	if ($Query_run) 
	{
		echo "<script> alert('Data Insert into Database Successfully') </script>";
	}
	else
	{
		echo "<script> alert('Data is Not Insert In Database ') </script>";
	}

}
?>