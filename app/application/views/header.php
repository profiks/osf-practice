<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo isset($title) ? $title :  'Clients'  ?></title>
		<link rel="shortcut icon" href="favicon.ico">
		<link href="<?php echo URL::base(); ?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="<?php echo URL::base(); ?>assets/css/jquery.reject.css" rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<?= HTML::style('assets/css/theme.css'); ?>
		
				
		
		<!-- jquery validation plugin-->
		<script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/jquery.validate.min.js"></script> 
		<!-- jquery check old browsers-->
		<script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/jquery.reject.js"></script> 
					
	</head>
	<body  id="pageContent">