<?php

$con = @mysql_connect("localhost" ,"root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}


mysql_select_db("my_db", $con);

	header("location:profile.html");

mysql_close($con);


?>	