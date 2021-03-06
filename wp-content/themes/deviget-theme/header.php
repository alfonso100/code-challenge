<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>



		<!-- header -->
		<header class="header" role="banner">
			<div class="wrapper">
				<!-- logo -->
				<div class="logo">
					<h1><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
				</div>
				<!-- end logo -->

				<!-- nav -->
				<nav class="nav" role="navigation">
					<div id="toggle">Show</div>
					<div id="popout">
					<?php wp_nav_menu('header-menu'); ?>
					</div>
				</nav>
				<!-- end nav -->

				<!-- search -->
				<a id="searchbutton" href="#">Search</a>
				</div> <!-- wrapper -->

		</header>
		<!-- end header -->

		<!-- wrapper -->
		<div class="wrapper">
