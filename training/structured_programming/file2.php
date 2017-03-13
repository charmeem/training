<?php
/**
 * Learning File and Streams in PHP.
 *
 * Detecting eof
 *
 * @package    file2
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */

if (!file_exists("file1.txt")) {
    throw new Exception ("File does not exists Buddy");
}
$file = fopen ("file1.txt", 'r');
$txt = '';
while (!feof($file)) {
    $txt .= fread($file, 1);
}
echo ("there has been $txt hits to this site");