
<?php

$con = @mysql_connect("localhost" ,"root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
// Create database
if(mysql_query("CREATE DATABASE my_db",$con))
{
echo "Database created";
}
else if(mysql_query("CREATE DATABASE my_db",$con)!=0)  
{
echo "Error creating database: " . mysql_error();
}
// Create table in my_db database
mysql_select_db("my_db", $con);
$sql = "CREATE TABLE Person(PersonID int NOT NULL AUTO_INCREMENT, UserName varchar(30), Day int,month varchar(20) ,year int , Password varchar(50), EmailAddress varchar(30),M_number varchar(20),gender char,city char(30),hobby char(30),PRIMARY KEY(PersonID),PHOTO BLOB  )";
mysql_query($sql,$con);

mysql_select_db("my_db", $con);
$sql="INSERT INTO person (UserName,Day,month,year,Password, EmailAddress, M_number, gender, city, hobby,PHOTO) VALUES('$_POST[User_Name]','$_POST[Birthday_day]','$_POST[Birthday_Month]','$_POST[Birthday_Year]','$_POST[password]','$_POST[Email_Id]','$_POST[Mobile_Number]','$_POST[Gender]','$_POST[City]','$_POST[Other_Hobby]','$_POST[upload]')";
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
else
{
	mysql_close($con);
  header("location:login_form.html");
}
?>