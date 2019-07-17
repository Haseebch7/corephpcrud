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
   
      <?php
  include("search.php");
?>
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
    			<td align="center">
    				<h5> <?php echo $datafetch['id']; ?> </h5>
    			</td>
    			<td>
    				<h5> <?php echo $datafetch['username']; ?> </h5>
    			</td>
    			<td>
    				<h5> <?php echo $datafetch['email']; ?> </h5>
    			</td>
    			<td>
    				<h5> <?php echo $datafetch['password']; ?> </h5>
    			</td>
    			<td>
    				<h5> <?php echo $datafetch['phone']; ?> </h5>
    			</td>
    			<td>
    				<a href="update.php?id=<?=$datafetch['id']; ?>">
                       <button type="button"  name="BtnEdit" class="btn btn-success"> Edit </button>
    				</a>
    			</td>
    			<td>
    				<a href="deletedata.php?id=<?=$datafetch['id']; ?>">
    				   <button type="button" name="BtnDelete" class="btn btn-danger" onclick=" return checkdelete()"> Delete</button>
    				</a>
    			</td>
    		</tr>
    	</tbody><!-- end Tbody -->

    	<?php
    	  	  }
    		}
    	?>

      </table><!-- end table -->

  </div><!-- end container -->
</section><!-- end section -->





<script type="text/javascript">
    function checkdelete() 
    {
        return confirm ('Are You Sure You Want To Delete This Data???');
    }
</script>


</body>
</html>





<?php
 if (isset($_POST['TxtSearch'])) 
  {
     $id = $_POST['id'];

     $query = " SELECT * FROM user WHERE id= $id ";
     $result = mysqli_query($constr, $query);

     if (mysqli_num_rows($result) > 0) 
     {
        while ($datafetch = mysqli_fetch_array($result)) 
        {
    ?>
<div class="container">
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

        <tbody>
            <tr>
                 <td> 
                    <h4> <?php echo $datafetch['id'] ; ?> </h4>
                </td>
                <td> 
                    <h4> <?php echo $datafetch['username'] ; ?> </h4>
                </td>
                <td> 
                    <h4> <?php echo $datafetch['email'] ; ?> </h4>
                </td>
                <td> 
                    <h4> <?php echo $datafetch['password'] ; ?> </h4>
                </td>
                <td> 
                    <h4> <?php echo $datafetch['phone'] ; ?> </h4>
                </td>
                <td>
                    <a href="update.php?id=<?=$datafetch['id']; ?>">
                       <button type="button"  name="BtnEdit" class="btn btn-success"> Edit </button>
                    </a>
                </td>
                <td>
                    <a href="deletedata.php?id=<?=$datafetch['id']; ?>">
                       <button type="button" name="BtnDelete" class="btn btn-danger" onclick=" return checkdelete()"> Delete</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
 
<?php
        }
     }
     else
     {
        echo "<script> confirm('you want ksjnvkjas') </script>";
     }
  }

?>
</div>