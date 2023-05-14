<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '' ); ?></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<!-- <link rel="stylesheet" href="http://localhost/www/SoftUni/wordPressCours/property/wp-content\themes\softuni-shop\assets\css\master.css"> -->
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>
	<div class="site-wrapper">
		<header class="site-header">
		<?php if(is_home()) : ?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( get_home_url() ); ?>">Online Shop</a>
				</h1>
             <?php else : ?>
				<p class="site-title">
					<a href="<?php echo esc_url( get_home_url() ); ?>">Online Shop</a>
				</p>
			<?php endif; ?>

			<!-- <h1 class="site-title"><a href="#">Online Shop</a></h1> -->
		</header>