<?php
/**
 * Learning Namespace in PHP.
 *
 * This File includes namespace.php
 * Demonstrating 'use' and alias with instances of Class 'Learning'
 *
 * @package    namespace2
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */
/**
 * Demonstrating 'use' and alias with instances of Class 'Learning'
 */
use NsLearning\Learning as b;

require('namespace.php');
$instance = new b;
echo $instance -> someLearning() . '<br>';
echo $instance -> moreLearning() .'<br>';
 
 
