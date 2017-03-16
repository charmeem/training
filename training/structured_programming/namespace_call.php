<?php
/**
 * Learning Namespace in PHP.
 *
 * This File includes namespace.php to demonstrate
 * Basic functionality of namespace
 *
 * @package    namespace
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */

/**
 * Following Script Fail
 * due to calling the methods and functions without
 * namespace prefix
 */
require('namespace.php');
echo NsLearning\NS_CONSTANT . '<br>';
echo NsLearning\noClass() . '<br>';
echo NsLearning\Learning::moreLearning() . '<br>' .'<br>';

echo 'Following script will Fail as the functions are called without namespace prefix -' . '<br>';
 
 /**
 * Following Script Fail
 * due to calling the methods and functions without
 * namespace prefix
 */
echo NS_CONSTANT . '<br>';
echo noClass() . '<br>';
echo Learning::moreLearning() . '<br>' .'<br>';

