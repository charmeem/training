<?php
/**
 * Testing Class for array1.php.
 * 
 * @package    arrays
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */
require 'arrays1.php';
use PHPUnit\Framework\TestCase;

Class arrays1Test extends TestCase
{
    public function testOutput() {
	    foreach ($array1 as $i => $value) {
		    print_r ($array1[$i]);
		}
    }
}


