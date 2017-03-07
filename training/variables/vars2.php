
<?php
// Type CAsting

//Example 1: Variable types

$example = array (1, 'test', 8.908, ['hello', '1', 999], null, true, false);
foreach ($example as $value) {
     echo "Variable Type of (";
     //echo $value;
     var_export($value); // var_export gives more explicit 
	                    // representation of array values
     echo ") = ";
     var_dump($value);
}

//Example 2: Type Casting

$example = array (1, 'test', 8.908, ['hello', '1', 999], null, true, false);
foreach ($example as $value) {
    echo "Intval of (";
    //echo $value;
    var_export($value); // var_export gives more explicit 
	                    //representation of array values
    echo ") = ";
    var_dump(intval($value));
	
}

// Example 3: Type Casting
$example = array (1, 'test', 8.908, ['hello', '1', 999], null, true, false);
foreach ($example as $value) {
    echo "floatval of (";
    //echo $value;
    var_export($value); // var_export gives more explicit representation of array values
    echo ") = ";
    var_dump(floatval($value));
}

// Example 4: Type Casting
$example = array (1, 'test', 8.908, ['hello', '1', 999], null, true, false);
foreach ($example as $value) {
	echo "strval of (";
	//echo $value;
	var_export($value); // var_export gives more explicit representation of array values
	echo ") = ";
	var_dump(strval($value));
}


//Example 5: detecting Types

$example = array (1, 'test', 8.908,['hello', '1', 999], null, true, false);
foreach ($example as $value) {
	echo "is_int(";
	//echo $value;
	var_export($value); // var_export gives more explicit representation of array values
	echo ") = ";
	var_dump(is_int($value));
	
}

//Example 6: detecting Types

$example = array (1, 'test', 8.908,['hello', '1', 999], null, true, false);
foreach ($example as $value) {
	echo "is_float(";
	//echo $value;
	var_export($value); // var_export gives more explicit representation of array values
	echo ") = ";
	var_dump(is_float($value));
	
}

//Example 7: detecting Types

$example = array (1, 'test', 8.908,['hello', '1', 999], null, true, false);
foreach ($example as $value) {
	echo "is_string(";
	//echo $value;
	var_export($value); // var_export gives more explicit representation of array values
	echo ") = ";
	var_dump(is_string($value));
	
}


//Example 8: detecting Types

$example = array (1, 'test', 8.908,['hello', '1', 999], null, true, false);
foreach ($example as $value) {
	echo "is_array(";
 	//echo $value;
	var_export($value); // var_export gives more explicit representation of array values
	echo ") = ";
	var_dump(is_array($value));
	
}


//Example 9: detecting Types

$example = array (1, 'test', 8.908,['hello', '1', 999], null, true, false);
foreach ($example as $value) {
	echo "is_object(";
	//echo $value;
	var_export($value); // var_export gives more explicit representation of array values
	echo ") = ";
	var_dump(is_object($value));
	
}
