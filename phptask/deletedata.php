<?php
include ("include/dbconnection.php");

$id = $_GET['id'];

$Query = " DELETE  FROM user WHERE id= $id ";
$Result = mysqli_query($constr, $Query);

if ($Result) 
{
	header('location:displaydata.php');
}
else
{
	echo "<script><alert'Data Is Not Delete'></script>";
}

?>