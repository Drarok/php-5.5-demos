<?php
/**
 * Example of PHP 5.5's non-scalar keys in foreach.
 *
 * @package   Example\Examples
 * @author    Mat Gadd <source@catchall.drarok.com>
 * @copyright 2013 Mat Gadd
 * @license   http://drarok.com/license Mat Gadd
 */

namespace Example\Examples;

/**
 * Example of PHP 5.5's non-scalar keys in foreach.
 *
 * @package Example\Examples
 * @author  Mat Gadd <source@catchall.drarok.com>
 */
class NonScalarForeachKeys extends Base
{
	/**
	 * Show what the finally keyword can do.
	 *
	 * @return void
	 */
	public function run()
	{
		echo <<<EOT
Under PHP 5.5 and later, you can return non-scalar keys from Iterators.
Only integers and strings are valid in previous versions.

You can run this example under PHP 5.3 or 5.4 to compare.

EOT;
		foreach (new NonScalarForeachKeys\TestIterator() as $key => $value) {
			echo $key, ' => ', $value, PHP_EOL;
		}
	}
}