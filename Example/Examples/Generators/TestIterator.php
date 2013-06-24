<?php
/**
 * PHP 5.5 Generator Example.
 *
 * @package   Example\Examples\Generators
 * @author    Mat Gadd <source@catchall.drarok.com>
 * @copyright 2013 Mat Gadd
 * @license   http://drarok.com/license Mat Gadd
 */

namespace Example\Examples\Generators;

/**
 * PHP 5.5 Generator Example.
 *
 * @package Example\Examples\Generators
 * @author  Mat Gadd <source@catchall.drarok.com>
 */
class TestIterator implements \IteratorAggregate
{
	public function getIterator()
	{
		$data = ['this', 'is', 'a', 'test'];

		foreach ($data as $key => $value) {
			$key += 1.5;
			echo 'Iterator yielding key: ', $key, PHP_EOL;
			yield $key => $value;
		}
	}
}