<?php
/**
 * @package DanPlugin
 **/

namespace Inc\Pages;

final class Admin {

	public function register() {
		add_action('admin_menu', [$this, 'add_admin_pages']);
	}

	public function add_admin_pages() {
		add_menu_page( 'Dan Plugin', 'Dan', 'manage_options', 'dan_plugin', [$this, 'admin_index'], 'dashicons-admin-multisite', 541);
	}

	public function admin_index() {
		require_once PLUGIN_PATH . 'templates/page.php';
	}
}