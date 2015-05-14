<?php
error_reporting(0);
if(isset($_POST['submit']))
{
echo "ok";
$a = $_POST['name'];
$b = $_POST['city'];
$c = $_POST['location_lat'];
$d = $_POST['location_lon'];
$e = $_POST['created_at'];


$con=mysql_connect("localhost","root");
// Check connection
if (!$con)
  {
  echo"You Cannot Connect To MYSQL";
  }
mysql_select_db("project",$con);
 $sql="INSERT INTO cafes(name,city,location_lat,location_lon,created_at) VALUES('$a','$b','$c','$d','$e')";

$f=mysql_query($sql);
if (isset($F))
{
	echo"Location added sucessfully";
}
mysql_close($con);
}
?>