<?php
/**
 * @package DanPlugin
 **/

namespace Inc;

final class Init
{

	/**
	 * @return string[] list of classes as services
	 */
	public static function get_services() {
		return [
			Pages\Admin::class,
			Base\Enqueue::class,
			Base\SettingsLink::class,
			PostType\Book::class
		];
	}

	/**
	 * Loop through classes and instantiate them. If register method exists,
	 * call it.
	 */
	public static function register_service() {
		foreach (self::get_services() as $class) {
			$service = self::instantiate($class);
			if (method_exists($service, 'register')) {
				$service->register();
			}
		}
	}

	/**
	 * @param $class class from the service array
	 *
	 * @return mixed new instance of the class
	 */
	private static function instantiate($class) {
		return new $class();
	}

}