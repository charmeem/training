
<?php
/**
 * Learning Ploymorphism.
 *
 * Calculates price and area of different products of same type
 * Area of different shapes like circle and rectangles are calculated differently
 * but they all belongs to same type\interface i.e. Shapes.
 * This is Polymorphism.
 * 
 * @param $text $width $height $radius
 * @package    polymorphism
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */

interface Shape 
{
    public function getArea();
}

class Rect implements Shape
{
    private $width;
	private $height;
	public function __construct($width, $height) 
	{
	    $this->width = $width;
		$this->height = $height;
	}
	public function getArea() 
	{
	    return $this->width * $this->height;
	}
}

class Circ implements Shape
{
    private $radius;
	public function __construct($radius) 
	{
	    $this->radius = $radius;
	}
	public function getArea() 
	{
	    return $this->radius * $this->radius * 3.14;
	}
}

$rect = new Rect(6, 4);
$circle = new Circ(2);

//echo $rect->$getArea();
//echo ("Area of Circle is $circle->getArea()");

function getPrice(Shape $shape)
{
    return $shape->getArea();
}
echo getPrice($rect);
echo "<br>";
echo getPrice($circle);
