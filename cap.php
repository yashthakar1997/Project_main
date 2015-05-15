<?php session_start();

if(isset($_REQUEST['Submit'])){
	// code for check server side validation
	if(empty($_SESSION['6_letters_code'] ) ||
		strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{  
		$msg="The Validation code does not match!";
	}else{
		include_once('php/regphp.php');
		
		// Captcha verification is Correct. Final Code Execute here!
	}
}	
 ?>
 
<style type="text/css">
.table{
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#333;
	
}
.table td{
		
}
</style>
 
 

<form action="" method="post" name="form1" id="form1" >
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" >
<?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
<?php } ?> 
    <tr>
      <td align="right" valign="top"> Validation code:</td>
      <td><img src="captcha_code_file.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
        <br>
        <input id="6_letters_code" name="6_letters_code" type="text">
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh
        </p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" onclick="return validate();" value="Submit"></td>
    </tr>
  </table>
</form>
<script type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script> 

