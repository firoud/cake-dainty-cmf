<?php


/**
* CakePHP Dainty CMF
* http://cake-dainty-cmf.googlecode.com
*
* @package dainty
* @subpackage dainty
* @author Ivan Chistyakov <zetruger@gmail.com>
* @version $Id$
* @link $HeadURL$
* @license MIT License (http://opensource.org/licenses/mit-license.php)
*/


class AppController extends Controller {

var $components = array('Session', 'RequestHandler', 'DebugKit.Toolbar');

var $helpers = array('Session', 'Html', 'Form');

var $layout = 'project';

function _disableAll() {
	Configure::write('debug', 0);
	$this->disableCache();
	$this->autoRender = FALSE;
	@ob_clean();
}

}


App::import('Controller', 'AppProject');


?>