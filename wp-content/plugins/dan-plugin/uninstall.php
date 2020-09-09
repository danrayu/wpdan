<?php
/**
 * Trigger this file on Plugin uninstall
 *
 * @package DanPlugin
 **/

if (!defined('WP_UNINSTALL_PLUGIN')) {
  die;
}

$books = ['post_type' => 'book', 'posts_per_page' => -1];
$books = get_posts($books);
foreach ($books as $book) {
  wp_delete_post($book->ID, FALSE);
}




