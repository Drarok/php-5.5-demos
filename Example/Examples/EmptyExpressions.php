<?php
/**
 * Example of PHP 5.5's empty() changes.
 *
 * @package   Example\Examples
 * @author    Mat Gadd <source@catchall.drarok.com>
 * @copyright 2013 Mat Gadd
 * @license   http://drarok.com/license Mat Gadd
 */

namespace Example\Examples;

/**
 * Example of PHP 5.5's empty() changes.
 *
 * @package Example\Examples
 * @author  Mat Gadd <source@catchall.drarok.com>
 */
class EmptyExpressions extends Base
{
	/**
	 * Show what Generators can do.
	 *
	 * @return void
	 */
	public function run()
	{
		echo <<<EOT
Prior to PHP 5.5, empty() would only accept variables, not function results.

This is now valid: empty(someFunction());

That's all. isset() is *not* changed.

EOT;
	}
}