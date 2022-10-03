<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package at-home
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500&display=swap" rel="stylesheet">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200,300,400,500&display=swap');
	</style>
	<script src="https://kit.fontawesome.com/da0b8e519a.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'at-home' ); ?></a>

	<header class="bg-dark text-white">
		<div class="container">
		<div class="d-flex align-items-center">
			<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none logo">
			Logo
			</a> 
			<div class="text-end">
				<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
				<li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
				<li><a href="#" class="nav-link px-2 text-white">Features</a></li>
				<li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
				<li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
				<li><a href="#" class="nav-link px-2 text-white">About</a></li>
				</ul>
			</div>
		</div>
		</div>
	</header>


