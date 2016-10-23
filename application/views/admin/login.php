<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Internet Dreams</title>
<link rel="stylesheet" href="<?=base_url();?>/assets/admin/css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="<?=base_url();?>/assets/admin/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="<?=base_url();?>/assets/admin/js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="<?=base_url();?>/assets/admin/js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<a href="#"><img src="<?=base_url();?>/assets/admin/images/shared/logo.png" width="156" height="40" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
		<?php echo validation_errors(); ?>

		<table border="0" cellpadding="0" cellspacing="0">
		<?php echo form_open('admin/login'); ?>
		<tr>
			<th>Админ.</th>
			<td><input type="text"  name="username" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Парола</th>
			<td><input type="password" value="" name="password"  class="login-inp" /></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" class="submit-login"  /></td>
		</tr>
		<?=form_close();?>
		</table>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	
 </div>

</div>
<!-- End: login-holder -->
</body>
</html>