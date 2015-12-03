<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->    
    <title><?php echo $meta['title']; ?></title>
	<meta name="description" content="<?php echo $meta['description']; ?>">
	<meta name="keywords" content="<?php echo $meta['keywords']; ?>">
	<meta name="robots" content="<?php echo $meta['robots']; ?>" />
    
    <meta name="generator" content="<?php echo $meta['generator']; ?>">    
	<meta name="author" content="<?php echo $meta['author']; ?>">
    <meta name="copyright" content="<?php echo $meta['copyright']; ?>">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo base_url('theme'); ?>/javascript/bootstrap/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="<?php echo base_url('theme'); ?>/javascript/bootstrap/css/bootstrap-theme.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="<?php echo base_url('theme'); ?>/javascript/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
	<div class="container">
	<nav>
	  <ul class="nav nav-pills pull-right">
		<li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('header_home'); ?></a></li>
		<li><a href="<?php echo base_url('about'); ?>"><?php echo $this->lang->line('header_about'); ?></a></li>
	  </ul>
	  <img src="<?php echo base_url('theme/'.$theme['theme']); ?>/images/logo.png">
	</nav>
	