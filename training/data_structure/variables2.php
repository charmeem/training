
<?php
/**
 * Checking variable types.
 *
 * Using an example array and foreach loop with var_dump to 
 * check the variable types.
 * 
 * @param array $example
 * @package    vars2
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */
$example = array (1, 'test', 8.908, ['hello', '1', 999], null, true, false);
foreach ($example as $value) {
     echo "Variable Type of (";
     //echo $value;
     var_export($value); // var_export gives more explicit 
	                    // representation of array values
     echo ") = ";
     var_dump($value);
}


/**
 * Type Casting (intval)
 *
 * Using an example array and foreach loop with var_dump to 
 * convert to integer and print the result.
 * 
 * @param array $example
 */

$example = array (1, 'test', 8.908, ['hello', '1', 999], null, true, false);
foreach ($example as $value) {
    echo "Intval of (";
    //echo $value;
    var_export($value); // var_export gives more explicit 
	                    //representation of array values
    echo ") = ";
    var_dump(intval($value));
	
}

/**
 * Type Casting (floatval)
 *
 * Using an example array and foreach loop with var_dump to 
 * convert to floating point and print the result.
 * 
 * @param array $example
 */
$example = array (1, 'test', 8.908, ['hello', '1', 999], null, true, false);
foreach ($example as $value) {
    echo "floatval of (";
    //echo $value;
    var_export($value); // var_export gives more explicit representation of array values
    echo ") = ";
    var_dump(floatval($value));
}

/**
 * Type Casting (strval)
 *
 * Using an example array and foreach loop with var_dump to 
 * convert to string and print the result.
 * 
 * @param array $example
 */

$example = array (1, 'test', 8.908, ['hello', '1', 999], null, true, false);
foreach ($example as $value) {
    echo "strval of (";
    //echo $value;
    var_export($value); // var_export gives more explicit representation of array values
    echo ") = ";
    var_dump(strval($value));
}


/**
 * Type Casting (is_int)
 *
 * Using an example array and foreach loop with var_dump to 
 * check integer and print the result.
 * 
 * @param array $example
 */
$example = array (1, 'test', 8.908,['hello', '1', 999], null, true, false);
foreach ($example as $value) {
    echo "is_int(";
    //echo $value;
    var_export($value); // var_export gives more explicit representation of array values
    echo ") = ";
    var_dump(is_int($value));
}


/**
 * Type Casting (is_float)
 *
 * Using an example array and foreach loop with var_dump to 
 * check floating point and print the result.
 * 
 * @param array $example
 */
$example = array (1, 'test', 8.908,['hello', '1', 999], null, true, false);
foreach ($example as $value) {
    echo "is_float(";
    //echo $value;
    var_export($value); // var_export gives more explicit representation of array values
    echo ") = ";
    var_dump(is_float($value));
}

/**
 * Type Casting (is_string)
 *
 * Using an example array and foreach loop with var_dump to 
 * check string and print the result.
 * 
 * @param array $example
 */
$example = array (1, 'test', 8.908,['hello', '1', 999], null, true, false);
foreach ($example as $value) {
    echo "is_string(";
    //echo $value;
    var_export($value); // var_export gives more explicit representation of array values
    echo ") = ";
    var_dump(is_string($value));
	
}


/**
 * Type Casting (is_array)
 *
 * Using an example array and foreach loop with var_dump to 
 * check array and print the result.
 * 
 * @param array $example
 */
$example = array (1, 'test', 8.908,['hello', '1', 999], null, true, false);
foreach ($example as $value) {
    echo "is_array(";
    //echo $value;
    var_export($value); // var_export gives more explicit representation of array values
    echo ") = ";
    var_dump(is_array($value));
	
}


/**
 * Type Casting (is_object)
 *
 * Using an example array and foreach loop with var_dump to 
 * check object and print the result.
 * 
 * @param array $example
 */
$example = array (1, 'test', 8.908,['hello', '1', 999], null, true, false);
foreach ($example as $value) {
    echo "is_object(";
    //echo $value;
    var_export($value); // var_export gives more explicit representation of array values
    echo ") = ";
    var_dump(is_object($value));
}

/**
 * if empty
 *
 * Using an example array and foreach loop with var_dump to 
 * check if Variable is empty.
 * 
 * @param array $example
 */
$example = array (1,'0','test', 8.908,['hello', '0', 999], null, true, false);
foreach ($example as $value) {
    echo "if_empty(";
    //echo $value;
    var_export($value); // var_export gives more explicit representation of array values
    echo ") = ";
    var_dump(empty($value));
}
