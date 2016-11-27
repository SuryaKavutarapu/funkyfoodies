<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Food Funkies<?php wp_title(); ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<!--<link href="<?php bloginfo('template_directory');?>/styles/flexgrid.auto.css" rel="stylesheet">-->
	<link href="<?php bloginfo('template_directory');?>/styles/button.auto.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>
	<nav>
		<div class="wrapper">
		<a href="<?php echo home_url();?>"><div class="brand">Funky <span>Foodies</span></div></a>
		<!--<ul>
			<li><a href="<?php echo home_url();?>">1.Home</a></li> 
			<li><a href="#aboutus">2.About Us</a></li> 
			<li><a href="#instafeed">3.Instagram</a></li>
			<li><a href="#blog">4.blog</a></li> 
			<li><a href="">5.Contact Us</a></li>  
		</ul>-->
		  <?php 
		    
			 $args = array(
				  
				   'theme_location' => 'primary'
			      
			 );
			 
		   
		  ?>
		 <?php wp_nav_menu( $args );?>
		</div>
	</nav>
   <div class="wrapper">
		 