
<?php
/**
 * Learning Singleton pattern.
 *
 * Singleton uses Private Constructor and Static public 'getInstance' methods
 * and static private instance property.
 * Singleton is a patteren that ensures only single instance of Class.
 * 
 * @param 
 * @package    singleton
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */
class Preference
{
    private $props = array();
    private static $instance;
	private function __construct(){}
	public static function getInstance()
	{
	    if ( empty(self::$instance)) {
		    self::$instance = new Preference();
		}
		return self::$instance;
	}
	public function setProperty($key, $val)
	{
	    $this->props[$key] = $val;
	}
	public function getProperty( $key )
	{
	    return $this->props[$key];
	}
}

$pref = Preference::getInstance();
$pref->setProperty("name", "Mubashir Mufti");
print $pref->getProperty("name") . "<br>";
unset ($pref);

$pref2 = Preference::getInstance();
print $pref2->getProperty("name") . "\n";


