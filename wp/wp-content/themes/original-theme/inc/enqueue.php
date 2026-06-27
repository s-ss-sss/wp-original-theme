<?php

/**
 * テーマアセット読込
 */
function theme_enqueue_assets()
{
	wp_enqueue_script(
		'tsparticles-engine',
		get_template_directory_uri() . '/assets/vendor/tsparticles/tsparticles.engine.min.js',
		[],
		'4.2.1',
		true
	);

	wp_enqueue_script(
		'tsparticles-slim',
		get_template_directory_uri() . '/assets/vendor/tsparticles/tsparticles.slim.bundle.min.js',
		['tsparticles-engine'],
		'4.2.1',
		true
	);

	wp_enqueue_style(
		'swiper',
		get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css',
		[],
		'12.2.0'
	);

	wp_enqueue_style(
		'theme-style',
		get_template_directory_uri() . '/assets/css/style.css',
		[],
		filemtime(get_template_directory() . '/assets/css/style.css')
	);

	wp_enqueue_script(
		'swiper',
		get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js',
		[],
		'12.2.0',
		true
	);

	wp_enqueue_script(
		'theme-script',
		get_template_directory_uri() . '/assets/js/script.js',
		['tsparticles-engine', 'tsparticles-slim', 'swiper'],
		filemtime(get_template_directory() . '/assets/js/script.js'),
		true
	);

	wp_localize_script(
		'theme-script',
		'themeData',
		[
			'thanksUrl' => home_url('/thanks/'),
		]
	);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_assets');
