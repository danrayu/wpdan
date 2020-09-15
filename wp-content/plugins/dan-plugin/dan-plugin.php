<?php
/**
 * @package DanPlugin
 **/
/*
Plugin Name: Dan Plugin
Plugin URI: https://example.com/
Description: Exercise
Version: 1.0.0
Author: Dan
Author URI: https://example.com/
License: GPLv2 or later
Text Domain: danPlugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/
defined( 'ABSPATH') or die;

if (file_exists(dirname(__FILE__). '/vendor/autoload.php')) {
	require_once dirname(__FILE__). '/vendor/autoload.php';
}
use Inc\Base\Activate, Inc\Base\Deactivate;

class DanPlugin {

	public $pluginName;

	function __construct() {
		add_action('init', [$this, 'custom_post_type']);

		$this->pluginName = plugin_basename(__FILE__);
	}

	function activate() {
		Activate::activate();
	}

	function deactivate() {
		Deactivate::deactivate();
	}

	function register() {
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue' ] );

		add_action('admin_menu', [$this, 'add_admin_pages']);

		add_filter("plugin_action_links_$this->pluginName", [$this, 'settings_link']);
	}

	static function custom_post_type() {
		register_post_type( 'book', [
			'labels'      => [
				'name'          => __( 'Books' ),
				'singular_name' => __( 'Book' ),
			],
			'public'      => TRUE,
			'has_archive' => FALSE,
			'rewrite'     => [ 'slug' => 'book' ],
		] );
	}

	public function settings_link($links) {
		$settings_link = '<a href="admin.php?page=dan_plugin">Settings</a>';
		array_push( $links, $settings_link);
		return $links;
	}

	public function add_admin_pages() {
		add_menu_page( 'Dan Plugin', 'Dan', 'manage_options', 'dan_plugin', [$this, 'admin_index'], 'dashicons-admin-multisite', 541);
	}

	public function admin_index() {
		require_once plugin_dir_path(__FILE__) . 'templates/page.php';
	}

	function enqueue() {
		wp_enqueue_style( 'dan-plugin', plugins_url( '/assets/dan-plugin.css', __FILE__ ) );
	}

}

if ( class_exists( 'DanPlugin' ) ) {
	$danPlugin = new DanPlugin();
	$danPlugin->register();
}

register_activation_hook( __FILE__, [ $danPlugin, 'activate' ] );

register_deactivation_hook( __FILE__, [ $danPlugin, 'deactivate' ] );

