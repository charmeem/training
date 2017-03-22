
<?php
/**
 * Learning FActory Pattern.
 *
 * 
 * @param 
 * @package    factory
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */
class Automobile
{
    private $autoMake;
	private $autoModel;
	
	public function __construct($make, $model) 
	{
	    $this->autoMake = $make;
		$this->autoModel = $model;
	}
	
	public function getMakeAndModel()
	{
	    return $this->autoMake . ' ' . $this->autoModel;
	}
}

class AutoFactory
{
    public static function create($make, $model) 
	{
	    return new Automobile($make, $model);
	}
}
$newAuto = AutoFactory::create('Toyota', 'Corolla ');
print_r($newAuto->getMakeAndModel());

$myAuto = new Automobile('is a good', 'car');
print_r($myAuto->getMakeAndModel());
