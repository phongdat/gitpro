
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="phongdat" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<div class="row">
			<?php phongdat_header(); ?>
		</div>
		<div class="menu">
			<?php phongdat_menu(); ?>
		</div>

    