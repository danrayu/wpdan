<?php
/**
 * @package DanPlugin
 **/

class DanPluginActivate {

	public static function activate() {
		flush_rewrite_rules();
	}

}