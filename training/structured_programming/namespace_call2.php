<?php
/**
 * Learning Namespace in PHP.
 *
 * This File includes namespace.php to demonstrate
 * Namespace importing using 'use' and alias 'as'. We can see that 
 * functions and constant of namespace1.php are called without namespace prefix.
 * But with alias.
 * 
 *
 * @package    namespace2
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */
use NsLearning as a;

require('namespace.php');
echo a\NS_CONSTANT . '<br>';
echo a\noClass() . '<br>';
echo a\Learning::moreLearning() . '<br>' .'<br>';

