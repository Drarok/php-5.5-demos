<?php
/**
 * Example of PHP 5.5's 'finally' keyword.
 *
 * @package   Example\Examples
 * @author    Mat Gadd <source@catchall.drarok.com>
 * @copyright 2013 Mat Gadd
 * @license   http://drarok.com/license Mat Gadd
 */

namespace Example\Examples;

/**
 * Example of PHP 5.5's 'finally' keyword.
 *
 * @package Example\Examples
 * @author  Mat Gadd <source@catchall.drarok.com>
 */
class FinallyKeyword extends Base
{
	/**
	 * Show what the finally keyword can do.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->_normalExample();
		$this->_returnExample();
	}

	/**
	 * Demonstrate the 'normal' use of finally.
	 *
	 * @return void
	 */
	protected function _normalExample()
	{
		echo <<<EOT
You can now use the 'finally' keyword after a 'catch' block to execute code after a 'try', no matter if
an Exception was thrown or not. The 'Cleaning up' message will always appear, as it's in the 'finally'
block.

EOT;
		for ($x = 1; $x <= 2; $x++) {
			try {
				echo 'Pass ', $x, PHP_EOL;
				if ($x == 2) {
					throw new \Exception('Throwing test Exception.');
				}
				echo 'Success', PHP_EOL;
			} catch (\Exception $e) {
				echo 'Caught Exception: ', $e->getMessage(), PHP_EOL;
			} finally {
				echo 'Cleaning up', PHP_EOL;
			}
		}
	}

	/**
	 * Demonstrate the 'return' use of finally.
	 *
	 * @return void
	 */
	protected function _returnExample()
	{
		echo <<<EOT
You can also use the 'finally' keyword to perform cleanup in a function after the 'return' keyword!

EOT;
		try {
			return;
		} finally {
			echo 'Cleaning up after \'return\'', PHP_EOL;
		}
	}
}