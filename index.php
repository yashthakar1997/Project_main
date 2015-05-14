<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div class="header" id="head">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<?php 
		include('DB/connect.php');
		session_start();
 	?>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Near By Location</title>
  <link href="" rel="icon" />  
  <link rel="stylesheet" type="text/css" href="css/display.css">
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
  <script src="map.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
  
  </head>
  <body>
  <div class="side" style="position:fixed;">
  <embed src="image/side banner.swf" height="600" width="93">
  </div>
  <div id="Layer1" align="center" class="container">
	<div class="container">
		<div class="navbar-header">
			<?php include('php/header.php'); ?>
			<?php include('php/menu.php'); ?>
		</div>  
	</div>
	<div class="container">
			<div class="container" id="main" style="float:left;height:400px;width:700px;margin:0px;">
			<div id="map-canvas"></div>
	</div>
    
		<div class="CONTAINER,offers " id="offers" style="height:auto;width:auto">
			<div class="container" style="height:400px;width:auto">
			  <center><?php include ('DB/db_show.php');?><center> 
			</div>
			<script>
			var latt = <?php echo json_encode($lat);?>;
			var longi= <?php echo json_encode($lon);?>;
			var name = <?php echo json_encode($name);?>;
			</script>
			<script src="map.js"></script>     
			
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
