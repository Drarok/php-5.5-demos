<?php
/**
 * Example of PHP 5.5's Generators.
 *
 * @package   Example\Examples
 * @author    Mat Gadd <source@catchall.drarok.com>
 * @copyright 2013 Mat Gadd
 * @license   http://drarok.com/license Mat Gadd
 */

namespace Example\Examples;

/**
 * Example of PHP 5.5's Generators.
 *
 * @package Example\Examples
 * @author  Mat Gadd <source@catchall.drarok.com>
 */
class Generators extends Base
{
	/**
	 * Show what Generators can do.
	 *
	 * @return void
	 */
	public function run()
	{
		echo <<<EOT
The control passes back and forth between the generator and the foreach loop, which is more efficient
than building a huge array in the class and passing it back, and a hell of a lot easier than building
a full Iterator subclass.

EOT;
		foreach (new Generators\TestIterator() as $key => $value) {
			echo 'Foreach loop received: ', $key, ' => ', $value, PHP_EOL;
		}
	}
}