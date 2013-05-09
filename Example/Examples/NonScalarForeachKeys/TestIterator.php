<?php
/**
 * Example of PHP 5.5's non-scalar keys in foreach.
 *
 * @package   Example\Examples
 * @author    Mat Gadd <source@catchall.drarok.com>
 * @copyright 2013 Mat Gadd
 * @license   http://drarok.com/license Mat Gadd
 */

namespace Example\Examples\NonScalarForeachKeys;

/**
 * Example of PHP 5.5's non-scalar keys in foreach.
 *
 * @package Example\Examples
 * @author  Mat Gadd <source@catchall.drarok.com>
 */
class TestIterator implements \Iterator
{
	/**
	 * These are the keys (and values) we'll return.
	 *
	 * @var array
	 */
	protected $_nonScalarKeys = array(
		13.4,
		14.5,
	);

	/**
	 * This is the current key.
	 *
	 * @var int
	 */
	protected $_key = 0;

	/**
	 * Return the current value.
	 *
	 * @return mixed
	 */
	public function current()
	{
		return $this->_nonScalarKeys[$this->_key];
	}

	/**
	 * Advance to the next item.
	 *
	 * @return void
	 */
	public function next()
	{
		$this->_key++;
	}

	/**
	 * Return the current key (same as value).
	 *
	 * @return mixed
	 */
	public function key()
	{
		return $this->current();
	}

	/**
	 * Return true if the current position is valid.
	 *
	 * @return bool
	 */
	public function valid()
	{
		return $this->_key < count($this->_nonScalarKeys);
	}

	/**
	 * Go back to the beginning.
	 *
	 * @return void
	 */
	public function rewind()
	{
		$this->_key = 0;
	}
}