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
			<?php include('php/about_menu.php'); ?>
		</div>  
	</div>
	<div class="container">
			
						
		<div class="CONTAINER,offers " id="offers" style="height:400px;">
			
			
				<h1>About us</h1>
			<div class="jumbotron">
				<p><h3>our mission</h3>
						our mission is to develop a project on near by location of food places using google map api </br>
				<p><h3>so who we are</h3>
						we are the collage students 
				<p><h3>clients</h3>	
						our clients will be any one who wants to know about their nearby food places
			</div>
			
		</div>
		
			<div class="jumbotron" id="slide_img" style="height:345px;border:solid;">      
			<?php include 'php/slide_img.php';?>
			</div>	
		
		<div class="jumbotron" id="Developer" style="border:solid;" >
			<?php include('php/dev.php')?>
		</div>
	</div>		
  </div>
  <div class="side" style="position:fixed;">
  <embed src="image/side banner.swf" height="600" width="93">
  </div>
  </body>
  </html>
</div>
