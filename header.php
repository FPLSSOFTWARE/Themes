<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width initial-scale=1"/>
<meta name="theme" content="forthtysever"/>
<meta name="author" content="fplssoftware"/>
<title> <?php echo get_bloginfo( 'name' ); ?> </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
	function showMenu()
	{
		var show = document.getElementById("menu");
		
		if(show.style.display === "none")
		{
			show.style.display = "block";
		}
		else
		{
			show.style.display = "none";
		}
	}
</script>
<style>
	@media only screen and (max-width: 600px)
	{
		.logo-container
		{
			display: none;
		}

	}
	@media only screen and (max-width: 800px)
	{
		.nav-menu
		{
			display: none;
		}
		.logo-container
		{
			padding-left: 37%;
		}
		.site-name
		{
			margin-top: 150px;
		}
		
		
	}
	@media only screen and (max-width: 1100px)
	{
		.hr1, .hr2, .hr3, .hr4, .hr5, .object1, .object2
		{
			display: none;
		}
		.logo-container
		{
			margin-top: -10px;
			
		}
		.site-name
		{
		

		}
		.site-description
		{
			margin-top: -10px;

		}
		.nav-menu
		{
			margin-top:90px;
			left: 0%;
			width: 100%;
			background-color: #000;
			border-left: 0px;
			border-right: 0px;
		}
		.header
		{
			height: 300px;
		}
	}
</style>
</head>
<body>
<table border="0" height="50" width="100%" style="background-color: #000;">
<tr>
	<td width="80" align="center">
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/image/FPLS FORUM LOGO.png" height="40">
	</td>
	<td class="left-navbar-header">
	
	</td>
	<td width="100" align="center">
		<div class="textlogo">FPLS</div>
	</td>
	<td class="right-navbar-header">
	
	</td>
	<td width="80" align="center">
		<button class="btn-menu" onclick="showMenu()" type="button"> <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/image/01.png" height="40"> </button>
	</td>
</tr>
</table>
<div class="menu" id="menu" style="display: none;">
	<ul class="nav"><?php wp_list_pages( '&title_li=' ); ?></ul>
</div>



<div class="header">

	<div class="logo-container">
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/image/LOGO.png" width="150">
	</div>
	<hr class="hr1"/>
	<hr class="hr2"/>
	<hr class="hr3"/>
	<hr class="hr4"/>
	<hr class="hr5"/>
	<div class="object1"></div>
	<div class="object2"></div>
	<h1 class="site-name text-center"> <?php echo get_bloginfo( 'name' ); ?> </h1>
	<h4 class="text-center site-description"><?php echo get_bloginfo( 'description' ); ?> </h4>
</div>

<ul class="nav nav-menu navbar-nav">
	<li> <a href="<?php echo get_bloginfo( 'home' ); ?>"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
	<li> <a href="#"><span class="glyphicon glyphicon-info-sign"></span> ABOUT US</a></li>
	<li> <a href="#"><span class="glyphicon glyphicon-earphone"></span> CONTACT US</a></li>
</ul>
