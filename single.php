<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Sedna - A Free HTML5/CSS3 website</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.fancybox.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/flexslider.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/queries.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/etline-font.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/animate.css/animate.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<?php wp_head(); ?>
</head>
<body id="top">
<?php get_header(); ?>
	<div class="row" style="padding-top:400px; color: white;">
		  <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
		  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		</div>
		<div class="row">
		  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
		  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
		  <!-- Optional: clear the XS cols if their content doesn't match in height -->
		  <div class="clearfix visible-xs-block"></div>
		  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
		</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>