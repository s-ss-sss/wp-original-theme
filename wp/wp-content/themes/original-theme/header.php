<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php if (!original_theme_hide_header()) : ?>
	<?php get_template_part('template-parts/layout/header'); ?>
	<?php get_template_part('template-parts/layout/drawer'); ?>
<?php endif; ?>
