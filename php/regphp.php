<?php
error_reporting(0);
if(isset($_REQUEST['Submit']))
{
echo "ok";
$b = $_POST['name'];
$c = $_POST['E-mail'];
$d = $_POST['RE-mail'];
$e = $_POST['Password'];
$f = $_POST['Conformpassword'];
$g = $_POST['Birthdate'];
$h = $_POST['Location'] ;

	$slquery = "SELECT 1 FROM reg WHERE email = '$email'";
    $selectresult = mysql_query($slquery);
    if(mysql_num_rows($selectresult)>0)
    {
         $msg = 'email already exists';
    }
 elseif($password != $cpassword){
         $msg = "passwords doesn't match";
    }

$con=mysql_connect("localhost","root");
// Check connection
if (!$con)
  {
  echo"You Cannot Connect To MYSQL";
  }
mysql_select_db("project",$con);
 $sql="INSERT INTO reg (name,Email,ReEmail,Password,Conformpassword,Birthdate,Location) VALUES('$b','$c','$d','$e','$f','$g','$h')";

$e=mysql_query($sql);
if (isset($e))
{
	header('Location: admin.php');
}
else
  {
  die("Try Again.").mysql_error();
  }
mysql_close($con);
}
?>