<?php
/**
 * @package DanPlugin
 **/

namespace Inc\PostType;

class Book
{
	function __construct() {
		add_action('init', [$this, 'custom_post_type']);
	}
	public static function custom_post_type() {
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
}