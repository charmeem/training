
<?php
/**
 * Learning Interface and inheritance.
 *
 * This program Calculates the amount of gas left
 * when a particular type of car with a aprticular milage travels given distance.
 * Mileage, distance and initial amount of gas are given as input
 * 
 * @param $milage, $distance $gas
 * @package    interface
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */

interface Moveable
{
    function moveForward($distance);
	function fly ($distance);
}

class Vehicle 
{
    function __construct($amount) 
	{
	    $this->gas = $amount;
		echo "<p>Vehicle has $this->gas litres available in the start. ";
	}
}

class Toyota extends Vehicle implements Moveable
{
    private $mileage = 13;
    function moveForward($distance) {
		$this->gas = $this->gas - round(($distance/$this->mileage),2); 
		echo "<p>Toyota has left $this->gas litres after travelling $distance Km";
	}
	function fly($distance) {
	    echo "and, by the way, Toyota cannot Fly!";
	}
}

$my_car = new Toyota(20);  // Car has 20 litres in the start
$my_car->moveForward(300); // how much gas left after travelling to 100Km distance
echo "<br>";
$my_car->fly(1000);