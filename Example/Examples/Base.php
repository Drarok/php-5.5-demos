<?php
/**
 * Base class for Examples.
 *
 * @package   Example\Examples
 * @author    Mat Gadd <source@catchall.drarok.com>
 * @copyright 2013 Mat Gadd
 * @license   http://drarok.com/license Mat Gadd
 */

namespace Example\Examples;

/**
 * Base class for Examples.
 *
 * @package Example\Examples
 * @author  Mat Gadd <source@catchall.drarok.com>
 */
abstract class Base
{
	/**
	 * Subclasses must override this and perform their example.
	 *
	 * @return void
	 */
	abstract public function run();
}