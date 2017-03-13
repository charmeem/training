<?php
/**
 * Learning File and Streams in PHP.
 *
 * @package    file1
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */

/**
 * Using 'fopen','fgets' and 'fwrite' 
 * Program reads counter from the file, increment it and overwrite it back.
 * a+ opens the file for read and write and create the file if it does not exists
 * second and third lines are actually not used here
 * 
 */ 
$file = fopen("file1.txt", 'a+');
if (false == $file) {
    die ( "unable to open file");
    //echo "Sorry the file does not exist";
}
if (filesize("file1.txt") == 0) {
$counter = 0;
} else {
    $counter = (int)fgets($file);
}
ftruncate ( $file, 0);
$counter++;
fwrite ($file, $counter);
echo("there has been $counter hits to this site");
