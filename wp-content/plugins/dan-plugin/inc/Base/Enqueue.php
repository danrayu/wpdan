<?php

/**
 * @package DanPlugin
 **/

namespace Inc\Base;

class Enqueue
{

	public function register() {
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue' ] );
	}

	function enqueue() {
		wp_enqueue_style( 'dan-plugin', PLUGIN_URL . '/assets/dan-plugin.css');
	}

}