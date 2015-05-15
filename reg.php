<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div class="header" id="head">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Near By Location</title>  
  <link rel="stylesheet" type="text/css" href="css/display.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  
  </head>
  <body>
  <div class="side" style="position:fixed;">
  <embed src="image/side banner.swf" height="600" width="93">
  </div>
  <div id="Layer1" align="center" class="container">
	<div class="container">
		<div class="navbar-header">
			<?php include('php/header.php'); ?>
			<?php include('php/no_active_menu.php'); ?>
		</div>  
	</div>
	<div class="container">
			
						
			<div class="CONTAINER,offers " id="offers" style="height:400px;overflow:auto;">
				<div class="my-div" >
					
					<h1 align="center">Registration</h1>
			<form method="post" action="Reg.php">
            <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
			
			<tr>
				<td  align="right"> Name </td>
				<td><input type="text" name="name" size="40" required/></td>
			</tr>
			<tr>
				<td  align="right">Your E-mail</td>
				<td><input type="text" name="E-mail" size="40"/></td>
			</tr>
			<tr>
				<td  align="right">Re-enter your  E-mail</td>
				<td><input type="text" name="RE-mail" size="40"/></td>
			</tr>
			<tr>
				<td  align="right">Password </td>
				<td><input type="password" name="Password" size="40" required/></td>
			</tr>
			<tr>
				<td  align="right">Conformpassword</td>
				<td><input type="password" name="Conformpassword" size="40" /></td>
			</tr>
			<tr>
				<td align="right">Birthdate </td>
				<td><input type="text" name="Birthdate" /></td>
			</tr>
			<tr>
				<td  align="right">Location</td>
				<td><input type="text" name="Location" /></td>
			</tr>
			<tr>
				<td  colspan="2" align="center"><?php require 'cap.php'?>;</td>
			</tr>
			</table>
			</form>
					
					
				</div>	
			</div>	
	
			<div class="jumbotron" id="slide_img" style="height:345px;border:solid;">      
				<?php include 'php/slide_img.php';?>
			</div>	
		
			<div class="jumbotron" id="Developer" style="border:solid;" >
				<?php include('php/dev.php')?>
			</div>
	</div>		
  
  <div class="side" style="position:fixed;">
  <embed src="image/side banner.swf" height="600" width="93">
  </div>
  </body>
  </html>
</div>
