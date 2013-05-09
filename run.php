<?php
/**
 * Runner for the PHP 5.5 examples.
 *
 * @package   Example
 * @author    Mat Gadd <source@catchall.drarok.com>
 * @copyright 2013 Mat Gadd
 * @license   http://drarok.com/license Mat Gadd
 */

require_once 'Example/Autoloader.php';
Example\Autoloader::register();

$commands = array_slice($_SERVER['argv'], 1);

if (! $commands) {
	echo 'Please pass in one or more example names to run:', PHP_EOL;

	foreach (glob(__DIR__ . '/Example/Examples/*.php') as $fileName) {
		echo ' * ', basename($fileName, '.php'), PHP_EOL;
	}

	exit(1);
}

foreach ($commands as $command) {
	$className = 'Example\\Examples\\' . ucfirst($command);
	$instance = new $className();
	$instance->run();
	echo '----------', PHP_EOL;
}