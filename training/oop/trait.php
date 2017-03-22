
<?php
/**
 * Learning Traits.
 *
 * @param 
 * @package    trait
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */
trait test1
{
    public function traitFunction1()
	{
	    echo"This is function of trait test1 <br>";
	}
}
trait test2
{
    public function traitFunction2()
	{
	    echo"& This is function of trait test2";
	}
}


Class UsingTrait
{
    use test1, test2;
}

$my_object = new UsingTrait;
$my_object->traitFunction1();
$my_object->traitFunction2();
