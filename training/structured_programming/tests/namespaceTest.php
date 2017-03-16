<?php
/**
 * Testing Class for namespace.php.
 * 
 * @package    namespace
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */
require 'namespace.php';
use PHPUnit\Framework\TestCase;

Class LearningTest extends TestCase
{
    private $learning;
	protected function setUp() {
	    $this->learning = new NsLearning\Learning();
	}
	protected function tearDown() {
	    $this->learning = NULL;
	}
	public function testNamespaceFail() {
    $this->assertNull($this->learning->someLearning());
	}
}


