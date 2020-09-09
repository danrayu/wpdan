<?php
/**
 * @package DanPlugin
 **/

class DanPluginDeactivate
{
	function deactivate() {
		flush_rewrite_rules();
	}

}