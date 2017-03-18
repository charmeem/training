
<?php
/**
 * Learning Abstract Classes.
 *
 * This program uses an abstract class with one abstract function
 * Two child classes are made with two seperate implementation of abstract function
 *
 * @param $text $color
 * @package    abstract
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */
abstract class message
{
    protected $message_content;
	function __construct($text) 
	{
	     $this->message_content = $text;
	}
    abstract function displayMessage($color);
}

class HugeMessage extends message
{
    function displayMessage($color) 
	{
	    echo "<h1 style='color: $color'>$this->message_content</h1>";
	}
}

class BigMessage extends message
{
    function displayMessage($color) 
	{
	    echo "<h2 style='color: $color'>$this->message_content</h2>";
	}
}

$message = new HugeMessage('This is a HUGE text message!');
$message->displayMessage('green');

$message = new BigMessage('This is a BIG text message!');
$message->displayMessage('orange');

