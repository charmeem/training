<?php
/**
 * Learning Namespace in PHP.
 *
 * This file will be called from another file namespace_call.php
 * to demonstrate basic functionality
 *
 * @package    namespace1
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */
namespace NsLearning;
const NS_CONSTANT = 'namespace';
function noClass () 
{
    return 'Learning namespace';
}
class Learning
{
    static function moreLearning()
	{
	    return 'Learning more about namespaces';
	}
	public function someLearning()
	{
	    return 'Some namespace learning';
	}
}

