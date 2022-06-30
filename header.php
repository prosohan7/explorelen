<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package explorelen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'explorelen' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="container">
				<div class="row">
					<div class="col-xl-2 align-self-center">
						<?php get_template_part('template-parts/header/logo'); ?>
					</div>
					<div class="col-xl-7 text-center">
						<?php get_template_part('template-parts/header/menu'); ?>
					</div>
					<div class="col-xl-3 align-self-center">
						<?php get_template_part('template-parts/header/button'); ?>
					</div>
				</div>
			</div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
