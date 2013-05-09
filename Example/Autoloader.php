<?php
/**
 * Example project autoloader.
 *
 * @package   Example
 * @author    Mat Gadd <source@catchall.drarok.com>
 * @copyright 2013 Mat Gadd
 * @license   http://drarok.com/license Mat Gadd
 */

namespace Example;

/**
 * Example project autoloader.
 *
 * @package Example
 * @author  Mat Gadd <source@catchall.drarok.com>
 */
abstract class Autoloader
{
	/**
	 * Register this autoloader.
	 *
	 * @return void
	 */
	static public function register()
	{
		spl_autoload_register('Example\\Autoloader::load');
	}

	/**
	 * Autoload a class for this project.
	 *
	 * @param string $className Name of the class to load.
	 *
	 * @return bool
	 */
	static public function load($className)
	{
		$className = ltrim($className, '\\');

		if (substr($className, 0, 8) != 'Example\\') {
			return FALSE;
		}

		// Remove the leading 'Example\'.
		$className = substr($className, 8);

		$fileName  = __DIR__ . DIRECTORY_SEPARATOR;
		if ($lastNsPos = strrpos($className, '\\')) {
			$namespace = substr($className, 0, $lastNsPos);
			$className = substr($className, $lastNsPos + 1);
			$fileName  .= str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
		}
		$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

		if (file_exists($fileName)) {
			require_once $fileName;
			return TRUE;
		} else {
			return FALSE;
		}
	}
}