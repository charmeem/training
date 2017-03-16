
<?php
/**
 * Checking variable types.
 *
 * Evolved version of variables2.php
 *
 * @param array $type
 * @package    vars2
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */
class VarTest 
{
    public $example;
    public function __construct()
	{
	     $this->example = array (1, 'test', 8.908, ['hello', '1', 999], null, " ", true, false);
   }
   
    public function loop($type) 
	{
	    foreach ($this->example as $value) {
		    echo "$type of (";
		    var_export($value);
		    echo ") = ";
			if ($type != "Variable Type") {
            var_dump($type($value));
            } else {
			    var_dump($value);
				}			
		}
	}
}

/**
 * Printing Variable Types
 *
 * @param $type
 */
$type = "Variable Type";
//$example = array (1, 'test', 8.908, ['hello', '1', 999], null, " ", true, false);
$instance = new VarTest();
echo ($instance->loop($type));

/**
 * Type Casting (intval)
 *
 * Using an example array and foreach loop with var_dump to 
 * convert to integer and print the result.
 * 
 * @param  $type
 */
$type = "intval";
$instance = new VarTest();
echo ($instance->loop($type));
 
/**
 * Type Casting (floatval)
 *
 * Using an example array and foreach loop with var_dump to 
 * convert to floating point and print the result.
 * 
 * @param array $type
 */
$type = "floatval";
$instance = new VarTest();
echo ($instance->loop($type));

/**
 * Type Casting (strval)
 *
 * Using an example array and foreach loop with var_dump to 
 * convert to string and print the result.
 * 
 * @param array $type
 */
$type = "strval";
$instance = new VarTest();
echo ($instance->loop($type));

/**
 * Type Casting (is_int)
 *
 * Using an example array and foreach loop with var_dump to 
 * check integer and print the result.
 * 
 * @param array $example
 */
$type = "is_int";
$instance = new VarTest();
echo ($instance->loop($type));

/**
 * Type Casting (is_float)
 *
 * Using an example array and foreach loop with var_dump to 
 * check floating point and print the result.
 * 
 * @param array $type
 */
$type = "is_float";
$instance = new VarTest();
echo ($instance->loop($type));

/**
 * Type Casting (is_string)
 *
 * Using an example array and foreach loop with var_dump to 
 * check string and print the result.
 * 
 * @param array $type
 */
$type = "is_string";
$instance = new VarTest();
echo ($instance->loop($type));

/**
 * Type Casting (is_array)
 *
 * Using an example array and foreach loop with var_dump to 
 * check array and print the result.
 * 
 * @param array $type
 */
$type = "is_array";
$instance = new VarTest();
echo ($instance->loop($type));

/**
 * Type Casting (is_object)
 *
 * Using an example array and foreach loop with var_dump to 
 * check object and print the result.
 * 
 * @param array $type
 */
$type = "is_object";
$instance = new VarTest();
echo ($instance->loop($type));

/**
 * if empty
 *
 * Using an example array and foreach loop with var_dump to 
 * check if Variable is empty.
 * 
 * @param array $type
 */
$type = "empty";
$instance = new VarTest();
echo ($instance->loop($type));

 