<?php
//Valid Variable names
$name = 'mubashir'; // valid name
echo $name ."<br>";
$name1_= 'mubashir'; // valid name
echo $name1_;
//$1name= 'mubashir'; // invalid name


echo("<br><br> ////////// Variable Types ");
$boolean = true; 
var_dump ($boolean);  // output boolean

$string = "quality";
var_dump ($string);  // output string

$integer = 15;
var_dump ($integer);  // output integer

$float = 15.6;
var_dump ($float);  // output integer


$array = ["one" => 1, "two" => "2", "three" => 3.509];
var_dump ($array);  // output object

// Type Casting
$boolean = (boolean) 123; 
var_dump ($boolean);  // output boolean

$string = (string) 15.6;
var_dump ($string);  // output string

$integer = (integer) 15.6;
var_dump ($integer);  // output integer

$object = (object) ["one" => 1, "two" => "2", "three" => 3.509];
var_dump ($object);  // output object

// Using other type casting functions

$boolean = true; 
var_dump(intval($boolean), floatval($boolean), strval($boolean));


$string = "quality";
var_dump(intval($string), floatval($string));

$integer = 15;
var_dump(floatval($integer), strval($integer));


$float = 15.6;
var_dump(intval($float), strval($float));
is_int($float);
