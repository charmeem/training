
<?php
/**
 * Learning Operators.
 *
 * @package    operators
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */

 
 /**
 * Arithmatic operators
 *
 * Increment, Prints var then increase
 */ 
$a = 1;
echo $a++;     // output 1 
echo "<br>";
echo $a;		
echo "<br>";

 /**
 * Arithmatic operators
 *
 * Increment, Increase var then print
 */
$b = 1;
echo "<br>";
echo ++$b;		// output 2
echo "<br>";
echo $b;
echo "<br>";


/**
 * Arithmatic operators
 *
 * Decrement, Print var then Decrease
 */
$a = 0;
echo "<br>";
echo $a--;     // output 0 
echo "<br>";
echo $a;	   // output -1	
echo "<br>";

/**
 * Arithmatic operators
 *
 * Decrement, Decrease var then print
 */
$a = 0;
echo "<br>";
echo --$a;     // output -1 
echo "<br>";
echo $a;	   // output -1	
echo "<br>";


/**
 * String Concatenate operators
 *
 */
$a = "Blue" . "Sky";
echo "<br>";
echo $a;

$b = "Light";
$b .= $a;
echo "<br>";
echo $b;
	
 
 

