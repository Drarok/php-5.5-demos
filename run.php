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

$requestedExamples = array_slice($_SERVER['argv'], 1);

$availableExamples = array();
foreach (glob(__DIR__ . '/Example/Examples/*.php') as $fileName) {
	$baseName = basename($fileName, '.php');

	// Exclude the abstract class.
	if ($baseName == 'Base') {
		continue;
	}

	$availableExamples[] = $baseName;
}

if (! $requestedExamples) {
	echo 'Please pass in one or more example names to run:', PHP_EOL;

	foreach ($availableExamples as $example) {
		echo ' * ', $example, PHP_EOL;
	}

	echo ' * All', PHP_EOL;

	exit(1);
}

// Allow an 'all' option.
if (count($requestedExamples) == 1
	&& strtolower($requestedExamples[0]) == 'all'
) {
	$requestedExamples = $availableExamples;
}

foreach ($requestedExamples as $example) {
	echo 'Running ', $example, PHP_EOL;
	$className = 'Example\\Examples\\' . $example;
	$instance = new $className();
	$instance->run();
	echo '----------', PHP_EOL;
}