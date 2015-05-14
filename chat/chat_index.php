<?php

	require('includes/core.inc.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Page Title -->
		<title>Chat Application</title>
		
		<!-- CSS Stylesheets -->
		<link type="text/css" rel="stylesheet" href="public/css/main.css" />
	</head>
	<body>
		<div id="input">
			<div id="feedback"></div>
			<form action="#" method="post" id="form_input">
				<lable>Enter Name:<input type="text" name="sender" id="sender"/></lable>
				<br /><lable>Enter Message:<br /><textarea id="message" cols="25" rows="4"></textarea></lable><br />
				<input type="submit" name="send" id="send" value="Send Message"/>
			</form>
		</div><!-- Input -->
	
		<div id="messages">
		
		</div><!-- Messages -->
		
		<!-- Javascript -->
		<script type="text/javascript" src="scripts/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="scripts/js/auto_chat.js"></script>
		<script type="text/javascript" src="scripts/js/send.js"></script>
		
	</body>
</html>