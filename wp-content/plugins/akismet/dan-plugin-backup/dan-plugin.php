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

class DanPlugin
{
  function __construct() {
    add_action('init', [$this, 'custom_post_type']);
  }

  function activate() {
    $this->custom_post_type();
    flush_rewrite_rules();
  }

  function deactivate() {
    flush_rewrite_rules();
  }

  function custom_post_type() {
    register_post_type('book', ['labels' => ['name' => __('Books'),
      'singular_name' => __( 'Book' )], 'public' => true,
      'has_archive' => false, 'rewrite' => ['slug' => 'book'],
    ]);
  }
}

if (class_exists('DanPlugin')) {
  $danPlugin = new DanPlugin();
}

register_activation_hook( __FILE__, [$danPlugin, 'activate']);

register_deactivation_hook( __FILE__, [$danPlugin, 'deactivate']);

