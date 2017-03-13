<?php
/**
 * Learning Arrays (cont.) in PHP.
 *
 * 
 * @package    array2
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */
/**
 * RE indexing using 'array_value' function
 *
 */
$array1 = array('one', 2, 'three', 'four', 5);
print_r($array1);

foreach ($array1 as $i => $value) {
    unset($array1[$i]);
}
print_r($array1);

$array1[] = 20;
print_r($array1);

$array1 = array_values($array1);
print_r($array1);
$array1[] = 21;
print_r($array1);

/**
 * Filling an Array with files
 *
 */
$dir = ".";
$handle = opendir($dir);
while (false !== ($file = readdir($handle))) {
    $files[] = $file;
}
closedir($handle);
var_dump($files);