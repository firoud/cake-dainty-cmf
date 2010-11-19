<?php


/**
* CakePHP Dainty CMF
* http://cake-dainty-cmf.googlecode.com
*
* @package dainty
* @subpackage dainty.config
* @author Ivan Chistyakov <zetruger@gmail.com>
* @version $Id$
* @link $HeadURL$
* @license MIT License (http://opensource.org/licenses/mit-license.php)
*/


Configure::write('Engine.name', 'CakePHP Dainty CMF');
Configure::write('Engine.version', '1.0.0');

// firebug
Configure::write('fb', FALSE);

if (!function_exists('fb')) {
	function fb() {
		if ((bool)Configure::read('debug') && Configure::read('fb')) {
			if (!class_exists('FirePHP') && !class_exists('FireCake')) {
				App::import('Vendor', 'FirePHP', array('file' => 'FirePHP' . DS . 'FirePHP.class.php')) or App::import('Vendor', 'DebugKit.FireCake');
			}
			if (func_num_args() == 0) {
				$args = array('Test', 'FirePHP', 'info');
			} else {
				$args = func_get_args();
			}
			if (class_exists('FirePHP')) {
				$instance = FirePHP::getInstance(TRUE);
				return call_user_func_array(array($instance, 'fb'), $args);
			} elseif (class_exists('FireCake')) {
				return call_user_func_array(array('FireCake', 'fb'), $args);
			} elseif (func_num_args() > 0) {
				trigger_error(__('FirePHP could not be loaded', TRUE), E_USER_NOTICE);
			}
		}
		return FALSE;
	}
}

App::import('Lib', 'Routines.Translit');

// project config
Configure::load('project');

if (!defined('DEFAULT_LANGUAGE')) {
	define('DEFAULT_LANGUAGE', 'rus');
}
if (is_null(Configure::read('Config.language'))) {
	Configure::write('Config.language', DEFAULT_LANGUAGE);
}

if (!defined('DEFAULT_WYSIWYG')) {
	define('DEFAULT_WYSIWYG', 'tinymce');
}
if (is_null(Configure::read('Config.wysiwyg'))) {
	Configure::write('Config.wysiwyg', DEFAULT_WYSIWYG);
}


?>