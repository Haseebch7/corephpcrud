<?php
  include("include/dbconnection.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title> Update Data </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body >
<section>
	<div class="container w-50">
		<h2 class="text-center text-primary pt-2"> User SignUp Form</h2>

	<?php  
		$id= $_GET['id'];
	   $query = "SELECT * FROM user WHERE id= $id";
	   $result = mysqli_query($constr, $query);
	   if (mysqli_num_rows($result) > 0) 
	   {
	   	  while ( $datafetch = mysqli_fetch_array($result)) 
	   	  {
	 
	?>
	
		<form method="post" action="" class="pt-5">
			<div class="form-group">
			   <input type="text" name="TxtName" value="<?php echo $datafetch['username'] ?>" placeholder="user name" class="form-control">
			</div>
			<div class="form-group">
			   <input type="email" name="TxtEmail" value="<?php echo $datafetch['email'] ?>" placeholder="Email Address" class="form-control">
			</div>
			<div class="form-group">
			   <input type="password" name="TxtPassword" value="<?php echo $datafetch['password'] ?>" placeholder="password" class="form-control">
			</div>
			<div class="form-group">
			   <input type="text" name="TxtPhone" value="<?php echo $datafetch['phone'] ?>" placeholder="Phone No" class="form-control">
			</div>
			<input type="submit" name="BtnUpdate" value="Update" class="btn btn-primary">
		</form>

   <?php
       }
      }
    ?>

	</div>
</section>

</body>
</html>


<?php
  if (isset($_POST['BtnUpdate'])) 
  {
  	$username = $_POST['TxtName'];
  	$email = $_POST['TxtEmail'];
  	$password = $_POST['TxtPassword'];
  	$phone = $_POST['TxtPhone'];
  	$id = $_GET['id'];


  	$Query ="UPDATE user SET
  	    username = '$username',
  	    email = '$email',
  	    password = '$password',
  	    phone = '$phone'
  	    WHERE id = '$id' " ;

  	$Result = mysqli_query($constr, $Query);

  	if ($Result) 
  	{
  		header('location:displaydata.php');
  	}
  	else
  	{
  		echo "<script>alert('Data Is Not Updated') <?script>";
  	}

  }
?>