<?php
define("servername", "localhost"); 
define("username", "root"); 
define("password", ""); 
define("dbname", "phptask"); 

$constr = mysqli_connect(servername, username, password, dbname);
if (mysqli_connect_error()) 
{
	echo " connection is Failed to MYSQL " .mysqli_connect_error();
}
else
{
	echo "";
}

 ?>
