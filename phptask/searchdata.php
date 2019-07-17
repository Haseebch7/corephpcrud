<?php
  include("include/dbconnection.php");
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Display Form </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>

</head>
<body>
<section>
	<div class="container">
	 <h2 style="margin-bottom:3%; text-align: center; margin-top: 3%;" class="text-warning">Display User Data</h2>
       <form action="" method="post">
          <input type="text" name="id" value="" class="form-control w-25" style="margin-left: 30%;">
          <input type="submit" name="BtnSearch" value="Search" class="btn btn-primary">
       </form>
      <table class="table table-bordered text-center">
    	<thead class="bg-light">
    		<tr>
    			<th> Id </th>
    			<th> Username </th>
    			<th> Email </th>
    			<th> Password </th>
    			<th> Phone </th>
    			<th colspan="2"> Action </th>
    		</tr>
    	</thead><!-- end Thead -->

    		<?php
    			$Query = "SELECT * FROM user";
    			$Result = mysqli_query($constr, $Query);
    			if (mysqli_num_rows($Result) > 0) 
    			{
    				while ($datafetch = mysqli_fetch_array($Result)) 
    				{
    		?>			

    	<tbody>
    		<tr class="text-center">

    		</tr>
    	</tbody><!-- end Tbody -->

    	<?php
    	  	  }
    		}
    	?>

      </table><!-- end table -->

  </div><!-- end container -->
</section><!-- end section -->

</body>
</html>