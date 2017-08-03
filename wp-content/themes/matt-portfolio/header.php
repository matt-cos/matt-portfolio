<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LM_Custom_Theme
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lm-custom-theme' ); ?></a> -->
	
	<!-- <nav class="white" role="navigation">

		<div class="nav-wrapper container">

			<div class="row">
				<div class="col s3">
					<a href="#" class="black-text">Matt Cosentino</a>	
				</div>
				
				<div class="col s3">
					<ul>
						<li><a href="#" class="black-text">About</a></li>
						<li><a href="#" class="black-text">Ramblings</a></li>
					</ul>
				</div>

				<div class="col s6">
					sdfjk
				</div>
				
			</div>

			<ul id="nav-mobile" class="side-nav">
				<li><a href="#" class="black-text">Navbar Link</a></li>
			</ul>

			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

		</div>
	</nav> -->
	<div class="custom-nav">
		<div class="container">
			<div class="row">
				<div class="col s3">
					<p>
						<a href="#" class="black-text">Matt Cosentino</a>
					</p>
				</div>
				<div class="col s3">
					<ul>
						<li><a href="#" class="black-text">About</a></li>
						<li><a href="#" class="black-text">Ramblings</a></li>
					</ul>
				</div>
				<div class="col s6">
					<p class="black-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum expedita, modi ut, ratione est, inventore commodi iste soluta ipsa impedit enim eius optio quo magni. Saepe sunt dolor suscipit dolorum, dolorem provident fugit, quos accusantium nostrum ipsum obcaecati. Facilis officiis id itaque nesciunt, deleniti ullam officia. Illo, est cumque! Doloribus.</p>
				</div>
			</div>
		</div>
	</div>


