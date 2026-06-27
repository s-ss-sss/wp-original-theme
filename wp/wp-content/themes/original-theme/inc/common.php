<?php

/**
 * 管理画面の未使用メニュー非表示
 */
function original_theme_remove_admin_menus()
{
	remove_menu_page('edit.php');
	remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'original_theme_remove_admin_menus');

/**
 * ヘッダーの非表示ページ判定
 */
function original_theme_hide_header()
{
	return is_page('thanks') || is_404();
}

/**
 * フッターの非表示ページ判定
 */
function original_theme_hide_footer()
{
	return is_404();
}

/**
 * bodyにページ固有クラス付与
 */
function original_theme_body_classes($classes)
{
	if (is_page('thanks')) {
		$classes[] = 'page-thanks';
	}

	if (is_404()) {
		$classes[] = 'page-404';
	}

	return $classes;
}

add_filter('body_class', 'original_theme_body_classes');

/**
 * カスタム投稿タイプ登録
 */
function original_theme_register_post_types()
{
	register_post_type('works', [
		'labels'        => [
			'name'          => '制作事例',
			'singular_name' => '制作事例',
			'menu_name'     => '制作事例',
			'all_items'     => '制作事例一覧',
			'add_new_item'  => '制作事例を追加',
			'edit_item'     => '制作事例を編集',
		],
		'public'        => true,
		'menu_position' => 4,
		'menu_icon'     => 'dashicons-portfolio',
		'supports'      => [
			'title',
			'thumbnail',
			'page-attributes',
		],
		'has_archive'   => false,
		'show_in_rest'  => true,
		'rewrite'       => [
			'slug' => 'works',
		],
	]);
}

add_action('init', 'original_theme_register_post_types');
