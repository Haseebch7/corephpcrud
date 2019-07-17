


<!DOCTYPE html>
<html>
<head>
	<title> Search Form </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>

</head>
<body>

<div class="container">
  <form action="" method="post">
    <input type="text" name="id" value="" class="form-control w-25" style="margin-left: 30%;">
    <input type="submit" name="BtnSearch" value="Search" class="btn btn-primary">
  </form>



<?php
 if (isset($_POST['BtnSearch'])) 
  {
     $id = $_POST['id'];

     $query = " SELECT * FROM user WHERE id= $id ";
     $result = mysqli_query($constr, $query);

     if (mysqli_num_rows($result) > 0) 
     {
        while ($datafetch = mysqli_fetch_array($result)) 
        {
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
     {}
  }

?>

</div><!-- end container -->


<script type="text/javascript">
	function checkdelete()
	{
		return confirm ('Are You Sure You Want To Delete This Data???');
	}
</script>


</body>
 </html>


