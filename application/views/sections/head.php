<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<title>
	<?php if (!isset($page_title)){echo "Welcome";} else {echo $page_title;} ?>
	</title>

	<!-- Included CSS Files -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/foundation'); ?>/stylesheets/foundation.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/foundation'); ?>/stylesheets/app.css">

	<!-- My Stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>/css/style.css">
	<!-- END My Stylesheet-->

	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/foundation'); ?>/stylesheets/ie.css">
	<![endif]-->

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="icon" type="image/ico" href="<?php echo base_url('assets/images'); ?>/favicon.ico">
</head>
<body>