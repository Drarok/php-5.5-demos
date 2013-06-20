<?php
/**
 * Simple class that can be used as a key / value in the demo.
 *
 * @package   Example\Examples
 * @author    Mat Gadd <source@catchall.drarok.com>
 * @copyright 2013 Mat Gadd
 * @license   http://drarok.com/license Mat Gadd
 */

namespace Example\Examples\NonScalarForeachKeys;

/**
 * Simple class that can be used as a key / value in the demo.
 *
 * @package Example\Examples
 * @author  Mat Gadd <source@catchall.drarok.com>
 */
class IterableValue
{
	static protected $_instanceCount = 0;

	protected $_instanceId;

	public function __construct()
	{
		$this->_instanceId = ++static::$_instanceCount;
	}

	public function __toString()
	{
		return '[' . get_class($this) . ' #' . $this->_instanceId . ']';
	}
}