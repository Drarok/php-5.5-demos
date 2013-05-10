<?php
/**
 * Example of PHP 5.5's ability to set process title.
 *
 * @package   Example\Examples
 * @author    Mat Gadd <source@catchall.drarok.com>
 * @copyright 2013 Mat Gadd
 * @license   http://drarok.com/license Mat Gadd
 */

namespace Example\Examples;

/**
 * Example of PHP 5.5's ability to set process title.
 *
 * @package Example\Examples
 * @author  Mat Gadd <source@catchall.drarok.com>
 */
class SetCliProcTitle extends Base
{
	/**
	 * Show what the finally keyword can do.
	 *
	 * @return void
	 */
	public function run()
	{
		echo <<<'EOT'
Under PHP 5.5 and later, you can set the process title under the CLI SAPI, without
the need for any extensions (such as proctitle, required under PHP <= 5.4).

cli_set_process_title(string $title) and cli_get_process_title(void) were added,
but at present are missing from the documentation.

EOT;

		cli_set_process_title('Test PHP 5.5 Title');
		sleep(5);
	}
}