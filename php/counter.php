<?php

mysql_connect("localhost","root","") or die("unable to connect db");
mysql_select_db("project") or die ("cant find db");

$fc = mysql_query("select * from counter");

while($row = mysql_fetch_assoc($fc))
{
	$current_counts = $row['hit'];
	$new_count = $current_counts + 1;
	$update_count = mysql_query("update `project`.`counter` set `hit` = $new_count");
	
	echo $new_count;
}

?>