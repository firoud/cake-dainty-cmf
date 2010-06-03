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

// project config
Configure::load('project');

// FirePHP
if (App::import('Vendor', 'FirePHP', array('file' => 'FirePHP' . DS . 'fb.php'))) {
	FB::setEnabled((bool)Configure::read('debug'));
}

// language
if (!defined('DEFAULT_LANGUAGE')) {
	define('DEFAULT_LANGUAGE', 'rus');
}
Configure::write('Config.language', DEFAULT_LANGUAGE);


?>