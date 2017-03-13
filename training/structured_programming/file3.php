<?php
/**
 * Accessing Network in PHP.
 *
 * Accessing network resources as files
 *
 * @package    file3
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */

$file = fopen ("http://www.phparch.com/", "r");
$page = '';
if ($file) {
    while ($s = fread($file, 500)) {
	    $page .= $s;
	}
} else {
    throw new Exception( " Unable to open connection to website");
}
echo $page;
 